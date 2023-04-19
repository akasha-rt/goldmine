<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
namespace Sugarcrm\Sugarcrm\custom\Hint\Job;

use Sugarcrm\Sugarcrm\custom\Hint\Config\ConfigTrait;
use Sugarcrm\Sugarcrm\custom\Hint\Manager;
use Sugarcrm\Sugarcrm\custom\Hint\ConfigurationManager;
use Sugarcrm\Sugarcrm\custom\Hint\HintConstants;
use Sugarcrm\Sugarcrm\custom\Hint\Queue\QueueTrait;
use Sugarcrm\Sugarcrm\custom\Hint\Queue\Event\InstanceInitCompletedEvent;

class HintSeatsJob implements \RunnableSchedulerJob
{
    use ConfigTrait, QueueTrait;

    /**
     * Job name
     */
    const NAME = 'Hint Seats Job';

    /**
     * SchedulersJob job_delay (seconds)
     * @var int
     */
    const JOB_POSTPONE_TIMEOUT = 5 * 60;

    /**
     * @var \SchedulersJob
     */
    protected $job;

    /**
     * {@inheritdoc}
     */
    public function setJob(\SchedulersJob $job)
    {
        $this->job = $job;
    }

    public function run($data)
    {
        $scheduler = \BeanFactory::retrieveBean('Schedulers', $this->job->scheduler_id);

        // Only run the HintSeatsJob once for each fresh installation. Once 5.4.0 has been
        // initially installed, any additional upgrades do not need to run the HintSeatsJob,
        // as the Initializer will handle sending the correct accountsets/targets data
        // for licensed users to the ISS.
        $hintSeatsFlag = ConfigurationManager::getHintConfigEntry(HintConstants::HINT_CONFIG_SEATS);
        if (empty($this->job->scheduler_id) || $hintSeatsFlag['value']) {
            $scheduler->status = 'Inactive';
            $scheduler->save();
            return $this->job->succeedJob(static::NAME . ': hint seats have already been assigned');
        }

        // postpone this job if we are not on sugar 10.3+
        if (version_compare($GLOBALS['sugar_version'], '10.3', '<')) {
            $message = 'sugar 10.3+ required for job to run; postponing for now';
            return $this->job->postponeJob($message, strval(static::JOB_POSTPONE_TIMEOUT));
        }

        $jobs = \BeanFactory::retrieveBean('SchedulersJobs');
        $query = new \SugarQuery();
        $query->select(['*']);
        $query
            ->from($jobs)
            ->where()
            ->equals('name', 'Hint Seats Job');
        $rows = $query->execute();

        foreach ($rows as $row) {
            if ($row['status'] == 'running' && $row['id'] != $this->job->id) {
                return $this->job->failJob(static::NAME . ": only one hint seats job allowed to run at any time");
            }
        }

        // There are times after an installation that our custom Hint classes are not
        // quite fully setup when this job runs. If this is the case, we simply postpone
        // the job to run later and hopefully give Mango the needed to finish bean
        // instantiation.
        try {
            if (Manager::instance()->addHintSeats()) {
                ConfigurationManager::updateHintConfigEntry(HintConstants::HINT_CONFIG_SEATS, true);

                $scheduler->status = 'Inactive';
                $scheduler->save();

                $this->eventQueue = $this->getEventQueue();
                $this->eventQueue->recordEvent(new InstanceInitCompletedEvent());

                return $this->job->succeedJob(static::NAME . ': successfully assigned Hint Seats');
            }
        } catch (\Throwable $e) {
            $message = 'Postponing hint seat assignments: ' . $e->getMessage();
            return $this->job->postponeJob($message, strval(static::JOB_POSTPONE_TIMEOUT));
        }
    }
}

<?php

namespace Sugarcrm\Sugarcrm\custom\Console\Command;

use Sugarcrm\Sugarcrm\Console\CommandRegistry\Mode\InstanceModeInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Hello World Example
 */
class HelloWorldCommand extends Command implements InstanceModeInterface
{
    protected $tables = [
        // 'contacts',
        // 'contacts_cstm',
        // 'email_addresses',
        // 'email_addr_bean_rel',
        // 'accounts',
        // 'accounts_cstm',
        // 'accounts_contacts',
        // 'notes',
        // 'leads',
        // 'leads_cstm',
        // 'meetings',
        // 'meetings_cstm',
        // 'meetings_users',
        // 'tasks',
        // 'tasks_cstm',
        // 'calls',
        // 'calls_cstm',
        // 'meetings_contacts',
        // 'meetings_leads',
        // 'calls_contacts',
        // 'calls_leads',
        // 'emails',
        // 'emails_cstm',
        'emails_text',
        // 'emails_beans'
    ];

    protected function configure()
    {
        $this
            ->setName('migration')
            ->setDescription('Hello World')
            ->setHelp('This command accepts no paramters and returns "Hello World".')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {

        foreach ($this->tables as $key => $table) {

            global $db;

            $limit = 1000;
            $offset = 0;

            $count = $db->fetchOne('SELECT count(*) as count FROM ' . $table)['count'];

            while($offset < $count) {
                $result = $db->query('SELECT * FROM ' . $table . ' limit ' . $limit . ' offset ' . $offset);


                $data = array();
                $data['table'] = $table;

                while ($row = $db->fetchByAssoc($result)) {
                    $data['data'][] = $row;
                }

                foreach ($data['data'] as $key => $value) {
                    foreach ($value as $k => $v) {
                        if(empty($v)) {
                            unset($data['data'][$key][$k]);
                        } else {
                            $data['data'][$key][$k] = $db->quote($data['data'][$key][$k]);
                        }
                    }

                    
                }
                $output->writeln("Hello world -> " . print_r($data, 1));

                // Convert the data to JSON format
                $data_json = json_encode($data);

                //  // Initialize cURL
                $ch = curl_init();

                // Set the endpoint URL
                // $url = 'http://localhost/goldmine_test/rest/v11_9/processRecordApi/processRecord';
                $url = 'https://westeros.rolustech.com:44321/rest/v11_9/processRecordApi/processRecord';

                // Set the request headers
                $headers = array(
                    'Content-Type: application/json', // Set the content type to JSON
                    // 'Authorization: Bearer YOUR_API_TOKEN' // Add any necessary authorization headers
                );

                // Set cURL options
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $data_json);
                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

                // Execute the cURL request
                $response = curl_exec($ch);

                // Close the cURL handle
                curl_close($ch);
                $offset += $limit;
            }
            
        }

        return 1;
    }
}
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

use Sugarcrm\Sugarcrm\Util\Files\FilePhpEntriesConverter;

class SugarUpgradeEncodeUploadFiles extends UpgradeScript
{
    public function run()
    {
        if (version_compare($this->from_version, '12.2.0', '>=')) {
            return;
        }

        $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator(UploadStream::getDir()));
        $fileConverter = new FilePhpEntriesConverter();

        /** @var SplFileInfo $fileInfo */
        foreach ($iterator as $fileInfo) {
            if ($fileInfo->isDir()) {
                continue;
            }

            $path = $fileInfo->getPathname();
            $encPath = $fileConverter->convert($path);

            rename($encPath, $path);
        }
    }
}

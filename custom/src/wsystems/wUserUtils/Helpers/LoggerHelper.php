<?php

namespace Sugarcrm\Sugarcrm\custom\wsystems\wUserUtils\Helpers;

use \Sugarcrm\Sugarcrm\Logger\Factory as LoggerFactory;

class LoggerHelper
{
    /**
     * Indicates the logger channel name.
     *
     * @var string
     */
    const LOGGER_CHANNEL_NAME = "wUserUtils";

    /**
     * Indicates the logger file name.
     *
     * @var string
     */
    const LOGGER_FILE_NAME = "wUserUtils";

    /**
     * Returns logger for wAttachments channel.
     *
     * @param string $channel
     *
     * @return \LoggerInterface
     */
    public static function getLoggerInstance($channel = self::LOGGER_CHANNEL_NAME)
    {
        return LoggerFactory::getLogger($channel);
    }

    /**
     * Returns the path of the logger file.
     *
     * @return string
     */
    public static function getLoggerFilePath(): string
    {
        return "./" . self::LOGGER_FILE_NAME . ".log";
    }
}

<?php

namespace Sugarcrm\Sugarcrm\custom\wsystems\wUserUtils;

use Sugarcrm\Sugarcrm\custom\wsystems\wUserUtils\Helpers\LoggerHelper;

class ConfiguratorManager
{
    /**
     * Indicates the default configuration for the logger channel.
     *
     * @var array
     */
    protected static $_loggerConfig = [
        "level"      => "debug",
        "processors" => [],
        "handlers"   => [
            [
                "type"  => "File",
                "level" => "debug",
            ],
        ],
    ];

    /**
     * Indicates the Configurator instance
     *
     * @var \Configurator
     */
    public $configurator = null;

    public function __construct()
    {
        $this->configurator = new \Configurator();
    }

    /**
     * Returns the logger configuration.
     *
     * @return array
     */
    public static function getLoggerConfig(): array
    {
        return self::$_loggerConfig;
    }

    /**
     * Creates the proper configuration for the logger.
     * Adds it within the config_override.php file.
     *
     * @return void
     */
    public function initLoggerConfig(): void
    {
        $_configLogger = &$this->configurator->config["logger"];

        if (is_array($_configLogger) === true && array_key_exists("channel", $_configLogger) === false) {
            $_configLogger["channels"] = [];
        }

        $_configLogger["channels"][LoggerHelper::LOGGER_CHANNEL_NAME] = self::$_loggerConfig;

        $this->configurator->handleOverride();
    }

    /**
     * Erases all logger config settings.
     *
     * @return void
     */
    public function eraseLoggerConfig(): void
    {
        $_configLogger = &$this->configurator->config["logger"];

        if (is_array($_configLogger) === true && array_key_exists("channel", $_configLogger) === false) {
            $_configLogger["channels"][LoggerHelper::LOGGER_CHANNEL_NAME] = false;
        }

        $this->configurator->handleOverride();
    }
}

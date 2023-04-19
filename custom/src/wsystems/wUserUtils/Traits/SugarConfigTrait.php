<?php

namespace Sugarcrm\Sugarcrm\custom\wsystems\wUserUtils\Traits;

use Configurator;

trait SugarConfigTrait
{
    /**
     * @var Configurator
     */
    protected $sugarConfig = null;

    /**
     * @param string $key
     * @param mixed $value
     *
     * @return void
     */
    public function sugarConfigSet(string $key, $value): void
    {
        $this->sugarConfig()->config[$key] = $value;
        $this->sugarConfig()->handleOverride();
    }

    /**
     * @param string $key
     *
     * @return mixed
     */
    public function sugarConfigGet(string $key)
    {
        return $this->sugarConfig()->config[$key];
    }

    /**
     * Refreshes Metadata cache.
     *
     * @return void
     */
    public function sugarConfigClearCache(): void
    {
        $this->sugarConfig()->clearCache();
    }

    /**
     * @return Configurator
     */
    protected function sugarConfig(): Configurator
    {
        if ($this->sugarConfig instanceof Configurator === false) {
            $this->sugarConfig = new Configurator();
            $this->sugarConfig->loadConfig();
        }

        return $this->sugarConfig;
    }
}

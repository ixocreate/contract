<?php
declare(strict_types=1);
namespace KiwiSuite\Contract\Application;

interface BootstrapItemInterface
{
    /**
     * @return mixed
     */
    public function getConfigurator(): ConfiguratorInterface;

    /**
     * @return string
     */
    public function getVariableName() : string;

    /**
     * @return string
     */
    public function getFileName() : string;
}

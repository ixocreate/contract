<?php
declare(strict_types=1);
namespace KiwiSuite\Contract\Application;

interface ConfiguratorInterface
{
    /**
     * @param ServiceRegistryInterface $serviceRegistry
     * @return void
     */
    public function registerService(ServiceRegistryInterface $serviceRegistry): void;
}

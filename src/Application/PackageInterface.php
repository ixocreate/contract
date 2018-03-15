<?php
/**
 * kiwi-suite/contract (https://github.com/kiwi-suite/contract)
 *
 * @package kiwi-suite/contract
 * @see https://github.com/kiwi-suite/contract
 * @copyright Copyright (c) 2010 - 2018 kiwi suite GmbH
 * @license MIT License
 */

declare(strict_types=1);
namespace KiwiSuite\Contract\Application;

use KiwiSuite\Contract\ServiceManager\ServiceManagerInterface;

interface PackageInterface
{
    /**
     * @param ConfiguratorRegistryInterface $configuratorRegistry
     */
    public function configure(ConfiguratorRegistryInterface $configuratorRegistry) : void;

    /**
     * @param ServiceRegistryInterface $serviceRegistry
     */
    public function addServices(ServiceRegistryInterface $serviceRegistry) : void;

    /**
     * @return array|null
     */
    public function getBootstrapItems() : ?array;

    /**
     * @return array|null
     */
    public function getConfigProvider() : ?array;

    /**
     * @param ServiceManagerInterface $serviceManager
     */
    public function boot(ServiceManagerInterface $serviceManager) : void;

    /**
     * @return null|string
     */
    public function getBootstrapDirectory(): ?string;

    /**
     * @return null|string
     */
    public function getConfigDirectory(): ?string;
}

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
namespace KiwiSuite\Contract\ServiceManager;

use KiwiSuite\Contract\ServiceManager\Autowire\FactoryResolverInterface;
use Psr\Container\ContainerInterface;

interface ServiceManagerInterface extends ContainerInterface
{
    /**
     * @param string $id
     * @param array|null $options
     * @return mixed
     */
    public function build(string $id, array $options = null);

    /**
     * @return ServiceManagerConfigInterface
     */
    public function getServiceManagerConfig(): ServiceManagerConfigInterface;

    /**
     * @return ServiceManagerSetupInterface
     */
    public function getServiceManagerSetup(): ServiceManagerSetupInterface;

    /**
     * @return FactoryResolverInterface
     */
    public function getFactoryResolver(): FactoryResolverInterface;
}

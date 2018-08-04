<?php
/**
 * kiwi-suite/contract (https://github.com/kiwi-suite/contract)
 *
 * @package kiwi-suite/contract
 * @link https://github.com/kiwi-suite/contract
 * @copyright Copyright (c) 2010 - 2018 kiwi suite GmbH
 * @license MIT License
 */

declare(strict_types=1);
namespace KiwiSuite\Contract\ServiceManager;

interface DelegatorFactoryInterface
{
    /**
     * @param ServiceManagerInterface $container
     * @param $name
     * @param callable $callback
     * @param array|null $options
     * @return mixed
     */
    public function __invoke(ServiceManagerInterface $container, $name, callable $callback, array $options = null);
}

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
namespace Ixocreate\Contract\ServiceManager\Autowire;

use Ixocreate\Contract\ServiceManager\FactoryInterface;

interface FactoryResolverInterface
{
    /**
     * @param string $requestedName
     * @param array|null $options
     * @return FactoryInterface
     */
    public function getFactory(string $requestedName, array $options = null): FactoryInterface;
}

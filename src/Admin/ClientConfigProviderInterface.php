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
namespace KiwiSuite\Contract\Admin;

use KiwiSuite\Contract\ServiceManager\NamedServiceInterface;

interface ClientConfigProviderInterface extends NamedServiceInterface
{
    /**
     * @param RoleInterface|null $role
     * @return array
     */
    public function clientConfig(?RoleInterface $role = null): array;
}

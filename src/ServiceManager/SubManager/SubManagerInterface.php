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
namespace KiwiSuite\Contract\ServiceManager\SubManager;

use KiwiSuite\Contract\ServiceManager\ServiceManagerInterface;

interface SubManagerInterface extends ServiceManagerInterface
{
    /**
     * @return string
     */
    public function getValidation(): string;
}

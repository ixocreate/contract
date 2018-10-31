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

interface DashboardWidgetInterface extends \JsonSerializable, NamedServiceInterface
{
    /**
     * @var int
     */
    const SIZE_SMALL = 1;

    /**
     * @var int
     */
    const SIZE_MEDIUM = 2;

    /**
     * @var int
     */
    const SIZE_LARGE = 3;

    /**
     * @return int
     */
    public function size(): int;

    /**
     * @return int
     */
    public function priority(): int;
}

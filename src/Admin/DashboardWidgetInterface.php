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

interface DashboardWidgetInterface extends \JsonSerializable
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

    /**
     * @return string
     */
    public function type(): string;

    /**
     * @return array
     */
    public function data(): array;
}

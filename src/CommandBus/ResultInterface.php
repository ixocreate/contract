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
namespace KiwiSuite\Contract\CommandBus;

interface ResultInterface
{
    public const STATUS_DONE = 'done';
    public const STATUS_ERROR = 'error';

    /**
     * @return bool
     */
    public function isSuccessful(): bool;

    /**
     * @return string
     */
    public function status(): string;

    /**
     * @return CommandInterface
     */
    public function command(): CommandInterface;

    /**
     * @return string[]
     */
    public function messages(): array;
}

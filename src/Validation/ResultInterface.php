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
namespace Ixocreate\Contract\Validation;

interface ResultInterface extends \JsonSerializable
{
    public function isSuccessful(): bool;

    public function has(string $name): bool;

    public function get(string $name): \Traversable;

    public function all(): \Traversable;
}

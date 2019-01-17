<?php
/**
 * @see https://github.com/ixocreate
 * @copyright IXOCREATE GmbH
 * @license MIT License
 */

declare(strict_types=1);

namespace Ixocreate\Contract\Registry;

interface RegistryInterface
{
    public function has(string $name): bool;

    public function get(string $name);
}
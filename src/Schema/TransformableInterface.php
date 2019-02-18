<?php
/**
 * @link https://github.com/ixocreate
 * @copyright IXOCREATE GmbH
 * @license MIT License
 */

declare(strict_types=1);

namespace Ixocreate\Contract\Schema;

use Ixocreate\Contract\Type\TypeInterface;

/**
 * Interface TransformableInterface
 * @package Ixocreate\Contract\Schema
 * @deprecated
 */
interface TransformableInterface
{
    public function transform($data): TypeInterface;
}

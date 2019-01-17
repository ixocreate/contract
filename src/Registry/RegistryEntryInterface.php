<?php
/**
 * @see https://github.com/ixocreate
 * @copyright IXOCREATE GmbH
 * @license MIT License
 */

declare(strict_types=1);

namespace Ixocreate\Contract\Registry;

use Ixocreate\Contract\Schema\ElementInterface;
use Ixocreate\Schema\Builder;

interface RegistryEntryInterface
{
    public function element(Builder $builder): ElementInterface;
}
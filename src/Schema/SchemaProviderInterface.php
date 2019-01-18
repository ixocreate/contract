<?php
/**
 * @link https://github.com/ixocreate
 * @copyright IXOCREATE GmbH
 * @license MIT License
 */

declare(strict_types=1);

namespace Ixocreate\Contract\Schema;

use Ixocreate\Schema\Builder;

interface SchemaProviderInterface
{
    public function provideSchema($name, Builder $builder, $options = []): SchemaInterface;
}

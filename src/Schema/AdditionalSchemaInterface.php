<?php
/**
 * @link https://github.com/ixocreate
 * @copyright IXOCREATE GmbH
 * @license MIT License
 */

declare(strict_types=1);

namespace Ixocreate\Contract\Schema;

use Ixocreate\Contract\ServiceManager\NamedServiceInterface;
use Ixocreate\Schema\Builder;

interface AdditionalSchemaInterface extends NamedServiceInterface
{
    /**
     * @param Builder $builder
     * @return SchemaInterface
     */
    public function additionalSchema(Builder $builder): SchemaInterface;
}

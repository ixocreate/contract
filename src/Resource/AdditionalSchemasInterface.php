<?php
/**
 * @link https://github.com/ixocreate
 * @copyright IXOCREATE GmbH
 * @license MIT License
 */

declare(strict_types=1);

namespace Ixocreate\Contract\Resource;

use Ixocreate\Contract\Schema\BuilderInterface;

interface AdditionalSchemasInterface extends SchemaAwareInterface
{
    /**
     * @param BuilderInterface $builder
     * @return null|array
     */
    public function additionalSchemas(BuilderInterface $builder): ?array;
}

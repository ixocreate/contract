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
namespace Ixocreate\Contract\Resource;

use Ixocreate\Contract\Schema\BuilderInterface;
use Ixocreate\Contract\Schema\Listing\ListSchemaInterface;
use Ixocreate\Contract\Schema\SchemaInterface;

interface SchemaAwareInterface extends ResourceInterface
{
    /**
     * @param BuilderInterface $builder
     * @return SchemaInterface
     */
    public function createSchema(BuilderInterface $builder): SchemaInterface;

    /**
     * @param BuilderInterface $builder
     * @return SchemaInterface
     */
    public function updateSchema(BuilderInterface $builder): SchemaInterface;

    /**
     * @return ListSchemaInterface
     */
    public function listSchema(): ListSchemaInterface;
}

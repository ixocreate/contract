<?php
namespace KiwiSuite\Contract\Resource;


use KiwiSuite\Contract\Schema\BuilderInterface;
use KiwiSuite\Contract\Schema\Listing\ListSchemaInterface;
use KiwiSuite\Contract\Schema\SchemaInterface;

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

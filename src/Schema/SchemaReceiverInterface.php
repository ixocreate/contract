<?php
namespace KiwiSuite\Contract\Schema;

use KiwiSuite\Schema\Builder;

interface SchemaReceiverInterface
{
    public function receiveSchema(Builder $builder, array $options = []): SchemaInterface;
}

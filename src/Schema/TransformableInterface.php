<?php
namespace KiwiSuite\Contract\Schema;

use KiwiSuite\Contract\Type\TypeInterface;

interface TransformableInterface
{
    public function transform($data): TypeInterface;
}

<?php
namespace KiwiSuite\Contract\Type;

use KiwiSuite\Contract\Schema\ElementInterface;
use KiwiSuite\Schema\ElementSubManager;

interface SchemaElementInterface
{
    public function schemaElement(ElementSubManager $elementSubManager): ElementInterface;
}

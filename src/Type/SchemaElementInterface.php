<?php
/**
 * @link https://github.com/ixocreate
 * @copyright IXOCREATE GmbH
 * @license MIT License
 */

declare(strict_types=1);

namespace Ixocreate\Contract\Type;

use Ixocreate\Contract\Schema\ElementInterface;
use Ixocreate\Schema\ElementSubManager;

interface SchemaElementInterface
{
    public function schemaElement(ElementSubManager $elementSubManager): ElementInterface;
}

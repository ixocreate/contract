<?php
declare(strict_types=1);

namespace Ixocreate\Contract\Schema;

use Ixocreate\Contract\ServiceManager\NamedServiceInterface;

interface AdditionalSchemaInterface extends NamedServiceInterface, SchemaReceiverInterface
{
}
<?php
declare(strict_types=1);

namespace KiwiSuite\Contract\Schema;

use KiwiSuite\Contract\ServiceManager\NamedServiceInterface;

interface AdditionalSchemaInterface extends NamedServiceInterface, SchemaReceiverInterface
{
}
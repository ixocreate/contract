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

namespace KiwiSuite\Contract\Schema;

use KiwiSuite\Schema\Builder;

interface SubSchemaReceiverInterface
{
    public function receiveSchema(string $name, Builder $builder, array $options = []): SchemaInterface;
}

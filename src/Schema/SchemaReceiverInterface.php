<?php
/**
 * @link https://github.com/ixocreate
 * @copyright IXOCREATE GmbH
 * @license MIT License
 */

declare(strict_types=1);

namespace Ixocreate\Contract\Schema;

use Ixocreate\Schema\Builder;

/**
 * Interface SchemaReceiverInterface
 * @package Ixocreate\Contract\Schema
 * @deprecated
 */
interface SchemaReceiverInterface
{
    public function receiveSchema(Builder $builder, array $options = []): SchemaInterface;
}

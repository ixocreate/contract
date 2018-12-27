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
namespace Ixocreate\Contract\Schema;

interface SchemaInterface extends \JsonSerializable
{
    /**
     * @param SchemaReceiverInterface $schemaReceiver
     * @return SchemaInterface
     */
    public function withSchemaReceiver(SchemaReceiverInterface $schemaReceiver): SchemaInterface;

    /**
     * @param array $elements
     * @return SchemaInterface
     */
    public function withElements(array $elements): SchemaInterface;

    /**
     * @param ElementInterface $element
     * @return SchemaInterface
     */
    public function withAddedElement(ElementInterface $element): SchemaInterface;

    /**
     * @return ElementInterface[]
     */
    public function elements(): array;

    /**
     * @return ElementInterface[]
     */
    public function all(): array;

    /**
     * @param string $name
     * @return SchemaInterface
     */
    public function remove(string $name): SchemaInterface;

    /**
     * @param string $name
     * @return ElementInterface
     */
    public function get(string $name): ElementInterface;

    /**
     * @param string $name
     * @return bool
     */
    public function has(string $name): bool;

    /**
     * @return SchemaReceiverInterface|null
     */
    public function schemaReceiver(): ? SchemaReceiverInterface;
}

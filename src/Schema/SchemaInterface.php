<?php
namespace KiwiSuite\Contract\Schema;

interface SchemaInterface extends \JsonSerializable
{
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
}

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
namespace KiwiSuite\Contract\Schema\Listing;

interface ListSchemaInterface extends \JsonSerializable
{
    /**
     * @return ElementInterface[]
     */
    public function elements(): array;

    /**
     * @param ElementInterface $element
     * @return ListSchemaInterface
     */
    public function withAddedElement(ElementInterface $element): ListSchemaInterface;

    /**
     * @return array
     */
    public function defaultSorting(): ?array;

    /**
     * @param string $defaultSorting
     * @param string $direction
     * @return ListSchemaInterface
     */
    public function withDefaultSorting(string $defaultSorting, string $direction): ListSchemaInterface;
}

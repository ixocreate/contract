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

interface BuilderInterface
{
    /**
     * @param string $element
     * @param string $name
     * @return ElementInterface
     */
    public function create(string $element, string $name): ElementInterface;
}

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

interface SingleElementInterface extends ElementInterface
{
    /**
     * @return bool
     */
    public function isRequired(): bool;

    /**
     * @param bool $required
     * @return ElementInterface
     */
    public function withRequired(bool $required): ElementInterface;
}

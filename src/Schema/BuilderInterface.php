<?php
/**
 * @link https://github.com/ixocreate
 * @copyright IXOCREATE GmbH
 * @license MIT License
 */

declare(strict_types=1);

namespace Ixocreate\Contract\Schema;

interface BuilderInterface
{
    /**
     * @param string $element
     * @param string $name
     * @return ElementInterface
     */
    public function create(string $element, string $name): ElementInterface;
}

<?php
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

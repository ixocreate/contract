<?php
namespace KiwiSuite\Contract\Schema;

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

<?php
namespace KiwiSuite\Contract\Schema\Listing;

interface ElementInterface extends \JsonSerializable
{
    /**
     * @return string
     */
    public function name(): string;

    /**
     * @return string
     */
    public function label(): string;

    /**
     * @return bool
     */
    public function sortable(): bool;

    /**
     * @return bool
     */
    public function searchable(): bool;
}

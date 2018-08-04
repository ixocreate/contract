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
namespace KiwiSuite\Contract\Resource;

interface AdminAwareInterface extends SchemaAwareInterface
{
    /**
     * @return string
     */
    public function label(): string;

    /**
     * @return null|string
     */
    public function indexAction(): ?string;

    /**
     * @return null|string
     */
    public function detailAction(): ?string;

    /**
     * @return null|string
     */
    public function createSchemaAction(): ?string;

    /**
     * @return null|string
     */
    public function createAction(): ?string;

    /**
     * @return null|string
     */
    public function updateAction(): ?string;

    /**
     * @return null|string
     */
    public function deleteAction(): ?string;
}

<?php
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

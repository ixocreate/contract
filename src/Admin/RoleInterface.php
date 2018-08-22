<?php
declare(strict_types=1);

namespace KiwiSuite\Contract\Admin;

interface RoleInterface
{
    /**
     * @return string
     */
    public static function getName(): string;

    /**
     * @return string
     */
    public function getLabel(): string;

    /**
     * @return array
     */
    public function getPermissions(): array;
}

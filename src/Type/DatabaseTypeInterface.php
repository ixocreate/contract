<?php
/**
 * @link https://github.com/ixocreate
 * @copyright IXOCREATE GmbH
 * @license MIT License
 */

declare(strict_types=1);

namespace Ixocreate\Contract\Type;

interface DatabaseTypeInterface
{
    public function convertToDatabaseValue();

    public static function baseDatabaseType(): string;
}

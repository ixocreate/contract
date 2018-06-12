<?php
namespace KiwiSuite\Contract\Type;

interface DatabaseTypeInterface
{
    public function convertToDatabaseValue();

    public static function baseDatabaseType(): string;
}

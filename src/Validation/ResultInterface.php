<?php
namespace KiwiSuite\Contract\Validation;

interface ResultInterface extends \JsonSerializable
{
    public function isSuccessful(): bool;

    public function has(string $name): bool;

    public function get(string $name): \Traversable;

    public function all(): \Traversable;
}
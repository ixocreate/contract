<?php
namespace KiwiSuite\Contract\Validation;

interface ViolationCollectorInterface
{
    public function add(string $name, string $error, string $message = null): void;
}
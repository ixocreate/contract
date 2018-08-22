<?php
namespace KiwiSuite\Contract\Validation;

interface ValidatableInterface
{
    public function validate(ViolationCollectorInterface $violationCollector): void;
}
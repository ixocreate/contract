<?php
/**
 * @link https://github.com/ixocreate
 * @copyright IXOCREATE GmbH
 * @license MIT License
 */

declare(strict_types=1);

namespace Ixocreate\Contract\Validation;

interface ValidatableInterface
{
    public function validate(ViolationCollectorInterface $violationCollector): void;
}

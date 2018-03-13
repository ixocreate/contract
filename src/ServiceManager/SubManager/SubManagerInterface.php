<?php
declare(strict_types=1);
namespace KiwiSuite\Contract\ServiceManager\SubManager;

use KiwiSuite\Contract\ServiceManager\ServiceManagerInterface;

interface SubManagerInterface extends ServiceManagerInterface
{
    /**
     * @return string
     */
    public function getValidation(): string;
}

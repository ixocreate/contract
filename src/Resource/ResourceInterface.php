<?php
namespace KiwiSuite\Contract\Resource;

use KiwiSuite\Contract\ServiceManager\NamedServiceInterface;

interface ResourceInterface extends NamedServiceInterface
{
    /**
     * @return string
     */
    public function repository(): string;
}

<?php
namespace KiwiSuite\Contract\Application;

interface ConfigProviderInterface
{
    /**
     * @return array
     */
    public function __invoke(): array;
}

<?php

declare(strict_types=1);
namespace KiwiSuite\Contract\ServiceManager\Autowire;

use KiwiSuite\Contract\ServiceManager\FactoryInterface;

interface FactoryResolverInterface
{
    /**
     * @param string $requestedName
     * @param array|null $options
     * @return FactoryInterface
     */
    public function getFactory(string $requestedName, array $options = null): FactoryInterface;
}

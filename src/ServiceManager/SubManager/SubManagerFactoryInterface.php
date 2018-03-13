<?php
declare(strict_types=1);
namespace KiwiSuite\Contract\ServiceManager\SubManager;

use KiwiSuite\Contract\ServiceManager\ServiceManagerInterface;

interface SubManagerFactoryInterface
{
    /**
     * @param ServiceManagerInterface $container
     * @param $requestedName
     * @param array|null $options
     * @return SubManagerInterface
     */
    public function __invoke(ServiceManagerInterface $container, $requestedName, array $options = null): SubManagerInterface;
}

<?php
declare(strict_types=1);
namespace KiwiSuite\Contract\ServiceManager;

interface FactoryInterface
{
    /**
     * @param ServiceManagerInterface $container
     * @param $requestedName
     * @param array|null $options
     * @return mixed
     */
    public function __invoke(ServiceManagerInterface $container, $requestedName, array $options = null);
}

<?php
declare(strict_types=1);
namespace KiwiSuite\Contract\ServiceManager;

interface DelegatorFactoryInterface
{
    /**
     * @param ServiceManagerInterface $container
     * @param $name
     * @param callable $callback
     * @param array|null $options
     * @return mixed
     */
    public function __invoke(ServiceManagerInterface $container, $name, callable $callback, array $options = null);
}

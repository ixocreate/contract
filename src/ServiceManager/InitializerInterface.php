<?php
declare(strict_types=1);
namespace KiwiSuite\Contract\ServiceManager;

interface InitializerInterface
{
    /**
     * @param ServiceManagerInterface $container
     * @param $instance
     * @return void
     */
    public function __invoke(ServiceManagerInterface $container, $instance): void;
}

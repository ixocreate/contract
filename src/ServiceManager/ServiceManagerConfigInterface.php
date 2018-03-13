<?php
declare(strict_types=1);

namespace KiwiSuite\Contract\ServiceManager;

use KiwiSuite\ServiceManager\Exception\InvalidArgumentException;
use KiwiSuite\ServiceManager\SubManager\SubManagerFactoryInterface;
use Zend\ServiceManager\Proxy\LazyServiceFactory;

interface ServiceManagerConfigInterface extends \Serializable
{
    /**
     * @return array
     */
    public function getFactories(): array;

    /**
     * @return array
     */
    public function getDelegators(): array;

    /**
     * @return array
     */
    public function getInitializers(): array;

    /**
     * @return array
     */
    public function getLazyServices(): array;

    /**
     * @return array
     */
    public function getSubManagers(): array;

    /**
     * @return array
     */
    public function getConfig(): array;
}

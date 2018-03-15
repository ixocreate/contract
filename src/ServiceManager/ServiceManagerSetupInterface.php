<?php
/**
 * kiwi-suite/contract (https://github.com/kiwi-suite/contract)
 *
 * @package kiwi-suite/contract
 * @see https://github.com/kiwi-suite/contract
 * @copyright Copyright (c) 2010 - 2018 kiwi suite GmbH
 * @license MIT License
 */

declare(strict_types=1);
namespace KiwiSuite\Contract\ServiceManager;

interface ServiceManagerSetupInterface
{
    /**
     * @return string
     */
    public function getLazyLoadingLocation(): string;

    /**
     * @return string
     */
    public function getAutowireLocation() : string;

    /**
     * @return bool
     */
    public function isPersistLazyLoading() : bool;

    /**
     * @return bool
     */
    public function isPersistAutowire() : bool;

    /**
     * @param string $persistRoot
     * @return ServiceManagerSetupInterface
     */
    public function withPersistRoot(string $persistRoot) : ServiceManagerSetupInterface;

    /**
     * @param bool $persistLazyLoading
     * @return ServiceManagerSetupInterface
     */
    public function withPersistLazyLoading(bool $persistLazyLoading) : ServiceManagerSetupInterface;

    /**
     * @param bool $persistAutowire
     * @return ServiceManagerSetupInterface
     */
    public function withPersistAutowire(bool $persistAutowire) : ServiceManagerSetupInterface;
}

<?php
/**
 * @link https://github.com/ixocreate
 * @copyright IXOCREATE GmbH
 * @license MIT License
 */

declare(strict_types=1);

namespace Ixocreate\Contract\Application;

interface ConfigExampleInterface
{
    /**
     * @return string
     */
    public function configName(): string;

    /**
     * @return string
     */
    public function configContent(): string;
}

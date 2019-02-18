<?php
/**
 * @link https://github.com/ixocreate
 * @copyright IXOCREATE GmbH
 * @license MIT License
 */

declare(strict_types=1);

namespace Ixocreate\Contract\Resource;

use Ixocreate\Contract\ServiceManager\NamedServiceInterface;

interface ResourceInterface extends NamedServiceInterface
{
    /**
     * @return string
     */
    public function label(): string;

    /**
     * @return string
     */
    public function repository(): string;
}

<?php
/**
 * @link https://github.com/ixocreate
 * @copyright IXOCREATE GmbH
 * @license MIT License
 */

declare(strict_types=1);

namespace Ixocreate\Contract\CommandBus;

interface DispatchInterface
{
    /**
     * @param CommandInterface $command
     * @return ResultInterface
     */
    public function dispatch(CommandInterface $command): ResultInterface;
}

<?php
/**
 * @link https://github.com/ixocreate
 * @copyright IXOCREATE GmbH
 * @license MIT License
 */

declare(strict_types=1);

namespace Ixocreate\Contract\Event;

interface EventInterface
{
    /**
     * @return bool
     */
    public function isPropagationStopped(): bool;

    /**
     *
     */
    public function stopPropagation(): void;
}

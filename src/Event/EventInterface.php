<?php
namespace KiwiSuite\Contract\Event;

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

<?php
/**
 * @link https://github.com/ixocreate
 * @copyright IXOCREATE GmbH
 * @license MIT License
 */

declare(strict_types=1);

namespace Ixocreate\Contract\Event;

interface SubscriberInterface
{
    public static function register(): array;

    public function handle(EventInterface $event);
}

<?php
namespace KiwiSuite\Contract\Event;

interface SubscriberInterface
{
    public static function register(): array;

    public function handle(EventInterface $event);
}

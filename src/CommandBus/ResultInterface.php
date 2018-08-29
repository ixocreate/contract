<?php
namespace KiwiSuite\Contract\CommandBus;

interface ResultInterface
{
    public const STATUS_DONE = 'done';
    public const STATUS_ERROR = 'error';

    /**
     * @return bool
     */
    public function isSuccessful(): bool;

    /**
     * @return string
     */
    public function status(): string;

    /**
     * @return CommandInterface
     */
    public function command(): CommandInterface;
}
<?php
namespace KiwiSuite\Contract\CommandBus;

use KiwiSuite\Contract\ServiceManager\NamedServiceInterface;

interface CommandInterface extends NamedServiceInterface
{
    /**
     * @return bool
     */
    public function execute(): bool;

    /**
     * @return string
     */
    public function uuid(): string;

    /**
     * @param string $uuid
     * @return CommandInterface
     */
    public function withUuid(string $uuid): self;

    /**
     * @return \DateTimeInterface
     */
    public function createdAt(): \DateTimeInterface;

    /**
     * @param \DateTimeInterface $createdAt
     * @return CommandInterface
     */
    public function withCreatedAt(\DateTimeInterface $createdAt): self;

    /**
     * @return array
     */
    public function data(): array;

    /**
     * @param array $data
     * @return CommandInterface
     */
    public function withData(array $data): self;
}
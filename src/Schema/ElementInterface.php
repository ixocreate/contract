<?php
/**
 * @link https://github.com/ixocreate
 * @copyright IXOCREATE GmbH
 * @license MIT License
 */

declare(strict_types=1);

namespace Ixocreate\Contract\Schema;

use Ixocreate\Contract\ServiceManager\NamedServiceInterface;

interface ElementInterface extends \JsonSerializable, NamedServiceInterface
{
    public function inputType(): string;

    public function type(): string;

    public function name(): string;

    public function label(): ?string;

    public function metadata(): array;

    public function withName(string $name): ElementInterface;

    public function withLabel(string $label): ElementInterface;

    public function withMetadata(array $metadata): ElementInterface;

    public function withAddedMetadata(string $key, $value): ElementInterface;
}

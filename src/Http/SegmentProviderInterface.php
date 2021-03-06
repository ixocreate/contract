<?php
/**
 * @link https://github.com/ixocreate
 * @copyright IXOCREATE GmbH
 * @license MIT License
 */

declare(strict_types=1);

namespace Ixocreate\Contract\Http;

interface SegmentProviderInterface
{
    /**
     * @return string
     */
    public function getSegment(): string;
}

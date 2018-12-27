<?php
/**
 * @link https://github.com/ixocreate
 * @copyright IXOCREATE GmbH
 * @license MIT License
 */

declare(strict_types=1);

namespace Ixocreate\Contract\Resource\Widgets;

use Ixocreate\Contract\Resource\Widgets\Positions\AboveListWidgetsInterface;
use Ixocreate\Contract\Resource\Widgets\Positions\AboveEditWidgetsInterface;
use Ixocreate\Contract\Resource\Widgets\Positions\AboveCreateWidgetsInterface;
use Ixocreate\Contract\Resource\Widgets\Positions\BelowListWidgetsInterface;
use Ixocreate\Contract\Resource\Widgets\Positions\BelowEditWidgetsInterface;
use Ixocreate\Contract\Resource\Widgets\Positions\BelowCreateWidgetsInterface;

interface WidgetsInterface extends
    AboveListWidgetsInterface,
    AboveEditWidgetsInterface,
    AboveCreateWidgetsInterface,
    BelowListWidgetsInterface,
    BelowEditWidgetsInterface,
    BelowCreateWidgetsInterface
{
}

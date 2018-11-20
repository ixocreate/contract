<?php
declare(strict_types=1);

namespace KiwiSuite\Contract\Resource\Widgets;

use KiwiSuite\Contract\Resource\Widgets\Positions\AboveListWidgetsInterface;
use KiwiSuite\Contract\Resource\Widgets\Positions\AboveEditWidgetsInterface;
use KiwiSuite\Contract\Resource\Widgets\Positions\AboveCreateWidgetsInterface;
use KiwiSuite\Contract\Resource\Widgets\Positions\BelowListWidgetsInterface;
use KiwiSuite\Contract\Resource\Widgets\Positions\BelowEditWidgetsInterface;
use KiwiSuite\Contract\Resource\Widgets\Positions\BelowCreateWidgetsInterface;

interface WidgetsInterface extends 
    AboveListWidgetsInterface, 
    AboveEditWidgetsInterface, 
    AboveCreateWidgetsInterface, 
    BelowListWidgetsInterface, 
    BelowEditWidgetsInterface, 
    BelowCreateWidgetsInterface
{

}
<?php
declare(strict_types=1);

namespace Ixocreate\Contract\Resource\Widgets\Positions;

use Ixocreate\Contract\Admin\DashboardWidgetCollectorInterface;
use Ixocreate\Admin\Entity\User;

interface AboveCreateWidgetsInterface
{
    public function receiveAboveCreateWidgets(User $user, DashboardWidgetCollectorInterface $widgetCollector): void;
}
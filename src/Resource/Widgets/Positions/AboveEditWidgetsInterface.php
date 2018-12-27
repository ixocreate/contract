<?php
declare(strict_types=1);

namespace Ixocreate\Contract\Resource\Widgets\Positions;

use Ixocreate\Contract\Admin\DashboardWidgetCollectorInterface;
use Ixocreate\Admin\Entity\User;

interface AboveEditWidgetsInterface
{
    public function receiveAboveEditWidgets(User $user, DashboardWidgetCollectorInterface $widgetCollector, string $id): void;
}
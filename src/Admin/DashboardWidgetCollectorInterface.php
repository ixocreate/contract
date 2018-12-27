<?php
/**
 * @link https://github.com/ixocreate
 * @copyright IXOCREATE GmbH
 * @license MIT License
 */

declare(strict_types=1);

namespace Ixocreate\Contract\Admin;

interface DashboardWidgetCollectorInterface
{
    /**
     * @param DashboardWidgetInterface $dashboardWidget
     */
    public function add(DashboardWidgetInterface $dashboardWidget): void;

    /**
     * @return DashboardWidgetInterface[]
     */
    public function widgets(): array;
}

<?php
/**
 * kiwi-suite/contract (https://github.com/kiwi-suite/contract)
 *
 * @package kiwi-suite/contract
 * @link https://github.com/kiwi-suite/contract
 * @copyright Copyright (c) 2010 - 2018 kiwi suite GmbH
 * @license MIT License
 */

declare(strict_types=1);

namespace Ixocreate\Contract\Admin;

use Ixocreate\Admin\Entity\User;

interface DashboardWidgetProviderInterface
{
    /**
     * @param DashboardWidgetCollectorInterface $dashboardWidgetCollector
     * @param User $user
     */
    public function provide(DashboardWidgetCollectorInterface $dashboardWidgetCollector, User $user): void;
}

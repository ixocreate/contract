<?php
/**
 * @link https://github.com/ixocreate
 * @copyright IXOCREATE GmbH
 * @license MIT License
 */

declare(strict_types=1);

namespace Ixocreate\Contract\Admin;

use Ixocreate\Contract\ServiceManager\NamedServiceInterface;

interface ClientConfigProviderInterface extends NamedServiceInterface
{
    /**
     * @param RoleInterface|null $role
     * @return array
     */
    public function clientConfig(?RoleInterface $role = null): array;
}

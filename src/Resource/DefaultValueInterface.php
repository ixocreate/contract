<?php
/**
 * @link https://github.com/ixocreate
 * @copyright IXOCREATE GmbH
 * @license MIT License
 */

declare(strict_types=1);

namespace Ixocreate\Contract\Resource;

use Ixocreate\Admin\Entity\User;

interface DefaultValueInterface
{
    /**
     * @param User $user
     * @return array
     */
    public function defaultValues(User $user): array;
}

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

namespace KiwiSuite\Contract\Entity;

use Doctrine\ORM\Mapping\Builder\ClassMetadataBuilder;

interface DatabaseEntityInterface
{
    public static function loadMetadata(ClassMetadataBuilder $builder);
}

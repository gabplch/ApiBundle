<?php
/*
 * This file is part of the StfalconApiBundle.
 *
 * (c) Stfalcon LLC <stfalcon.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace StfalconStudio\ApiBundle\Service\Repository;

/**
 * Gettable One By Id Interface.
 *
 * @deprecated
 */
interface GettableOneByIdInterface
{
    /**
     * @param string $id
     *
     * @return mixed
     */
    public function getOneById(string $id): mixed;
}

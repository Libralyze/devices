<?php

/*
 * This file is part of the Libralyze Device List.
 *
 * (c) RUNALYZE <mail@runalyze.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Libralyze\Devices\Distributor;

class Stryd extends AbstractDistributor
{
    public function getEnum()
    {
        return DistributorProfile::STRYD;
    }

    public function getName()
    {
        return 'Stryd';
    }

    public function getDeviceEnumList()
    {
        return [];
    }
}

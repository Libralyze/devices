<?php

/*
 * This file is part of the Runalyze Device List.
 *
 * (c) RUNALYZE <mail@runalyze.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Runalyze\Devices\Distributor;

class Garmin implements DistributorInterface
{
    public function getEnum()
    {
        return DistributorProfile::GARMIN;
    }

    public function getName()
    {
        return 'Garmin';
    }

    public function getDeviceEnumList()
    {
        return [];
    }
}

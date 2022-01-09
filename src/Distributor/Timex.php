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

use Libralyze\Devices\Device\DeviceProfile;

class Timex extends AbstractDistributor
{
    public function getEnum()
    {
        return DistributorProfile::TIMEX;
    }

    public function getName()
    {
        return 'Timex';
    }

    public function getDeviceEnumList()
    {
        return [
            DeviceProfile::TIMEX_UNKNOWN,
        ];
    }
}

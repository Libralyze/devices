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

class Twonav extends AbstractDistributor
{
    public function getEnum()
    {
        return DistributorProfile::TWONAV;
    }

    public function getName()
    {
        return 'Twonav';
    }

    public function getDeviceEnumList()
    {
        return [
            DeviceProfile::TWONAV_ADVENTURA,
            DeviceProfile::TWONAV_SPORTIVA,
            DeviceProfile::TWONAV_SPORTIVA_2,
            DeviceProfile::TWONAV_TRAVERSE,
            DeviceProfile::TWONAV_ULTRA,
            DeviceProfile::TWONAV_UNKNOWN,
        ];
    }
}

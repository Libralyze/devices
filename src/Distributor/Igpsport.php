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

class Igpsport extends AbstractDistributor
{
    public function getEnum()
    {
        return DistributorProfile::IGPSPORT;
    }

    public function getName()
    {
        return 'iGPSPORT';
    }

    public function getDeviceEnumList()
    {
        return [
            DeviceProfile::IGPSPORT_IGS_20_E,
            DeviceProfile::IGPSPORT_IGS_50_E,
            DeviceProfile::IGPSPORT_IGS_130,
            DeviceProfile::IGPSPORT_IGS_618,
            DeviceProfile::IGPSPORT_IGS_620,
            DeviceProfile::IGPSPORT_UNKNOWN,
        ];
    }
}

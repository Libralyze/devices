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

class Epson extends AbstractDistributor
{
    public function getEnum()
    {
        return DistributorProfile::EPSON;
    }

    public function getName()
    {
        return 'Epson';
    }

    public function getDeviceEnumList()
    {
        return [
            DeviceProfile::EPSON_S_F_310,
            DeviceProfile::EPSON_S_F_510,
            DeviceProfile::EPSON_S_F_510_F,
            DeviceProfile::EPSON_S_F_710_S,
            DeviceProfile::EPSON_S_F_810,
            DeviceProfile::EPSON_UNKNOWN,
        ];
    }
}

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

class Osynce extends AbstractDistributor
{
    public function getEnum()
    {
        return DistributorProfile::OSYNCE;
    }

    public function getName()
    {
        return 'o-synce';
    }

    public function getDeviceEnumList()
    {
        return [
            DeviceProfile::OSYNCE_MIX_FREE,
            DeviceProfile::OSYNCE_MIX_PRO,
            DeviceProfile::OSYNCE_NAVI_2_COACH,
            DeviceProfile::OSYNCE_NAVI_2_MOVE,
            DeviceProfile::OSYNCE_UNKNOWN,
        ];
    }
}

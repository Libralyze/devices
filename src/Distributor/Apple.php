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

class Apple extends AbstractDistributor
{
    public function getEnum()
    {
        return DistributorProfile::APPLE;
    }

    public function getName()
    {
        return 'Apple';
    }

    public function getDeviceEnumList()
    {
        return [
            DeviceProfile::APPLE_WATCH,
            DeviceProfile::APPLE_WATCH_1_V_38,
            DeviceProfile::APPLE_WATCH_1_V_42,
            DeviceProfile::APPLE_WATCH_2_V_38,
            DeviceProfile::APPLE_WATCH_2_V_42,
            DeviceProfile::APPLE_WATCH_3_V_38,
            DeviceProfile::APPLE_WATCH_3_V_42,
            DeviceProfile::APPLE_WATCH_3_V_38_CELLULAR,
            DeviceProfile::APPLE_WATCH_3_V_42_CELLULAR,
            DeviceProfile::APPLE_WATCH_4_V_40,
            DeviceProfile::APPLE_WATCH_4_V_44,
            DeviceProfile::APPLE_WATCH_4_V_40_CELLULAR,
            DeviceProfile::APPLE_WATCH_4_V_44_CELLULAR,
            DeviceProfile::APPLE_WATCH_5_V_40,
            DeviceProfile::APPLE_WATCH_5_V_44,
            DeviceProfile::APPLE_WATCH_5_V_40_CELLULAR,
            DeviceProfile::APPLE_WATCH_5_V_44_CELLULAR,
            DeviceProfile::APPLE_WATCH_6_V_40,
            DeviceProfile::APPLE_WATCH_6_V_44,
            DeviceProfile::APPLE_WATCH_6_V_40_CELLULAR,
            DeviceProfile::APPLE_WATCH_6_V_44_CELLULAR,
            DeviceProfile::APPLE_WATCH_S_E_40,
            DeviceProfile::APPLE_WATCH_S_E_40_CELLULAR,
            DeviceProfile::APPLE_WATCH_S_E_44,
            DeviceProfile::APPLE_WATCH_S_E_44_CELLULAR,
            DeviceProfile::APPLE_IPHONE_X_S,
            DeviceProfile::APPLE_IPHONE_X_S_MAX_GLOBAL,
            DeviceProfile::APPLE_IPHONE_X_S_MAX,
            DeviceProfile::APPLE_IPHONE_X_R,
            DeviceProfile::APPLE_IPHONE_S_E_2,
            DeviceProfile::APPLE_IPHONE_S_E,
            DeviceProfile::APPLE_IPHONE_6,
            DeviceProfile::APPLE_IPHONE_6_S,
            DeviceProfile::APPLE_IPHONE_6_S_PLUS,
            DeviceProfile::APPLE_IPHONE_6_PLUS,
            DeviceProfile::APPLE_IPHONE_7,
            DeviceProfile::APPLE_IPHONE_7_PLUS,
            DeviceProfile::APPLE_IPHONE_8,
            DeviceProfile::APPLE_IPHONE_8_PLUS,
            DeviceProfile::APPLE_IPHONE_11,
            DeviceProfile::APPLE_IPHONE_11_PRO_MAX,
            DeviceProfile::APPLE_IPHONE_11_PRO,
            DeviceProfile::APPLE_IPHONE_12,
            DeviceProfile::APPLE_IPHONE_12_PRO,
            DeviceProfile::APPLE_IPHONE_12_PRO_MAX,
            DeviceProfile::APPLE_IPHONE_12_MINI,
        ];
    }
}

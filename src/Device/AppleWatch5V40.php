<?php

/*
 * This file is part of the Runalyze Device List.
 *
 * (c) RUNALYZE <mail@runalyze.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Runalyze\Devices\Device;

class AppleWatch5V40 extends AbstractDevice
{
    use AppleDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::APPLE_WATCH_5_V_40;
    }

    public function getName()
    {
        return 'Watch 5 (40mm)';
    }
}

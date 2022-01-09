<?php

/*
 * This file is part of the Libralyze Device List.
 *
 * (c) RUNALYZE <mail@runalyze.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Libralyze\Devices\Device;

class AppleWatch2V42 extends AbstractDevice
{
    use AppleDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::APPLE_WATCH_2_V_42;
    }

    public function getName()
    {
        return 'Watch 2 (42mm)';
    }
}

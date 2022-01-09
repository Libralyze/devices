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

class AppleWatchSE44 extends AbstractDevice
{
    use AppleDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::APPLE_WATCH_S_E_44;
    }

    public function getName()
    {
        return 'Watch SE (40mm)';
    }
}

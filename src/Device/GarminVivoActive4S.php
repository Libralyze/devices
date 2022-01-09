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

class GarminVivoActive4S extends AbstractDevice
{
    use GarminDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::GARMIN_VIVO_ACTIVE_4_S;
    }

    public function getName()
    {
        return 'vívoactive 4S';
    }

    public function hasBarometer()
    {
        return true;
    }
}

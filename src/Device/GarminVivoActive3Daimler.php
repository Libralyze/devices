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

class GarminVivoActive3Daimler extends AbstractDevice
{
    use GarminDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::GARMIN_VIVO_ACTIVE_3_DAIMLER;
    }

    public function getName()
    {
        return 'vívoactive 3 Daimler';
    }

    public function hasBarometer()
    {
        return true;
    }
}

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

class GarminMarqExpedition extends AbstractDevice
{
    use GarminDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::GARMIN_MARQ_EXPEDITION;
    }

    public function getName()
    {
        return 'MARQ Expedition';
    }

    public function hasBarometer()
    {
        return true;
    }
}

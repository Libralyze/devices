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

class GarminVivoSmart4 extends AbstractDevice
{
    use GarminDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::GARMIN_VIVO_SMART_4;
    }

    public function getName()
    {
        return 'vívosmart 4';
    }
}

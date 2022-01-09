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

class LezyneMiniGps extends AbstractDevice
{
    use LezyneDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::LEZYNE_MINI_GPS;
    }

    public function getName()
    {
        return 'MINI GPS';
    }
}

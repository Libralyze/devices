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

class SamsungGalaxyWatch3 extends AbstractDevice
{
    use SamsungDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::SAMSUNG_GALAXY_WATCH_3;
    }

    public function getName()
    {
        return 'Galaxy Watch 3';
    }
}

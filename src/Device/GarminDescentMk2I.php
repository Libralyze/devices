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

class GarminDescentMk2I extends AbstractDevice
{
    use GarminDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::GARMIN_DESCENT_MK_2_I;
    }

    public function getName()
    {
        return 'Descent MK2i';
    }

    public function hasBarometer()
    {
        return true;
    }
}

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

class PolarM600 extends AbstractDevice
{
    use PolarDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::POLAR_M_600;
    }

    public function getName()
    {
        return 'M600';
    }
}

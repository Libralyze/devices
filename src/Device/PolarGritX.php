<?php

/*
 * This file is part of the Runalyze Device List.
 *
 * (c) RUNALYZE <mail@runalyze.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Runalyze\Devices\Device;

class PolarGritX extends AbstractDevice
{
    use PolarDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::POLAR_GRIT_X;
    }

    public function getName()
    {
        return 'Grit X';
    }
}

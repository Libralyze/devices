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

class SigmaSportPC311 extends AbstractDevice
{
    use SigmaDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::SIGMA_SPORT_PC_3_11;
    }

    public function getName()
    {
        return 'Sport PC 3.11';
    }
}

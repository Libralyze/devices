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

class SigmaSportRox110Gps extends AbstractDevice
{
    use SigmaDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::SIGMA_SPORT_ROX_110_GPS;
    }

    public function getName()
    {
        return 'ROX 11.0 GPS';
    }
}

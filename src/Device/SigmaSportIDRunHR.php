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

class SigmaSportIDRunHR extends AbstractDevice
{
    use SigmaDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::SIGMA_SPORT_ID_RUN_HR;
    }

    public function getName()
    {
        return 'Sport ID RUN HR';
    }
}

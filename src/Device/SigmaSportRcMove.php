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

class SigmaSportRcMove extends AbstractDevice
{
    use SigmaDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::SIGMA_SPORT_RC_MOVE;
    }

    public function getName()
    {
        return 'Sport RC Move';
    }
}

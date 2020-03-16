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

class IgsportIgs20E extends AbstractDevice
{
    use IgsportDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::IGSPORT_IGS_20_E;
    }

    public function getName()
    {
        return 'iGS20E';
    }
}

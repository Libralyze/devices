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

class IgpsportIgs618 extends AbstractDevice
{
    use IgpsportDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::IGPSPORT_IGS_618;
    }

    public function getName()
    {
        return 'iGS618';
    }
}

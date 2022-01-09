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

class EpsonProSense57 extends AbstractDevice
{
    use EpsonDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::EPSON_PRO_SENSE_57;
    }

    public function getName()
    {
        return 'ProSense 57';
    }
}

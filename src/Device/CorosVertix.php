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

class CorosVertix extends AbstractDevice
{
    use CorosDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::COROS_VERTIX;
    }

    public function getName()
    {
        return 'Vertix';
    }

    public function hasBarometer()
    {
        return true;
    }
}

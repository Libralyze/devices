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

class SuuntoAmbit3Vertical extends AbstractDevice
{
    use SuuntoDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::SUUNTO_AMBIT_3_VERTICAL;
    }

    public function getName()
    {
        return 'Ambit 3 Vertical';
    }

    public function hasBarometer()
    {
        return true;
    }
}

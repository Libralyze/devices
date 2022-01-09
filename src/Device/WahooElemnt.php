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

class WahooElemnt extends AbstractDevice
{
    use WahooDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::WAHOO_ELEMNT;
    }

    public function getName()
    {
        return 'ELEMNT';
    }

    public function hasBarometer()
    {
        return true;
    }
}

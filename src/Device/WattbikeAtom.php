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

class WattbikeAtom extends AbstractDevice
{
    use WattbikeDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::WATTBIKE_ATOM;
    }

    public function getName()
    {
        return 'Atom';
    }
}

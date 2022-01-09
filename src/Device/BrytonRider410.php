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

class BrytonRider410 extends AbstractDevice
{
    use BrytonDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::BRYTON_RIDER_410;
    }

    public function getName()
    {
        return 'Rider 410';
    }
}

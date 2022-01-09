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

class TomTomRunner2Music extends AbstractDevice
{
    use TomTomDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::TOM_TOM_RUNNER_2_MUSIC;
    }

    public function getName()
    {
        return 'Runner 2 Music';
    }
}

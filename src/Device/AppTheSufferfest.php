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

class AppTheSufferfest extends AbstractDevice
{
    use AppDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::APP_THE_SUFFERFEST;
    }

    public function getName()
    {
        return 'The Sufferfest';
    }
}

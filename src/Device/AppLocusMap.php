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

class AppLocusMap extends AbstractDevice
{
    use AppDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::APP_LOCUS_MAP;
    }

    public function getName()
    {
        return 'Locus Map';
    }
}

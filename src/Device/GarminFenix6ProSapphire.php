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

class GarminFenix6ProSapphire extends AbstractDevice
{
    use GarminDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::GARMIN_FENIX_6_PRO_SAPPHIRE;
    }

    public function getName()
    {
        return 'Fenix 6 Pro (Sapphire)';
    }

    public function hasBarometer()
    {
        return true;
    }
}

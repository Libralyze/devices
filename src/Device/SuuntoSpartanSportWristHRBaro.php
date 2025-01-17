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

class SuuntoSpartanSportWristHRBaro extends AbstractDevice
{
    use SuuntoDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::SUUNTO_SPARTAN_SPORT_WRIST_H_R_BARO;
    }

    public function getName()
    {
        return 'Spartan Sport Wrist HR Baro';
    }

    public function hasBarometer()
    {
        return true;
    }
}

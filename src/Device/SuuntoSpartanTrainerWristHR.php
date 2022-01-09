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

class SuuntoSpartanTrainerWristHR extends AbstractDevice
{
    use SuuntoDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::SUUNTO_SPARTAN_TRAINER_WRIST_H_R;
    }

    public function getName()
    {
        return 'Spartan Trainer Wrist HR';
    }
}

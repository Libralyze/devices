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

class Concept2Unknown extends AbstractDevice
{
    use Concept2DeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::CONCEPT_2_UNKNOWN;
    }

    public function getName()
    {
        return '';
    }
}

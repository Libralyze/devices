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

class SuuntoSmartBelt extends AbstractDevice
{
    use SuuntoDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::SUUNTO_SMART_BELT;
    }

    public function getName()
    {
        return 'Smart Belt';
    }
}

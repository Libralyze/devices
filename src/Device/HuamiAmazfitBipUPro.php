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

class HuamiAmazfitBipUPro extends AbstractDevice
{
    use HuamiDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::HUAMI_AMAZFIT_BIP_U_PRO;
    }

    public function getName()
    {
        return 'Amazfit Bip U Pro';
    }
}

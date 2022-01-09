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

class GarminEdgeExplore1000 extends AbstractDevice
{
    use GarminDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::GARMIN_EDGE_EXPLORE_1000;
    }

    public function getName()
    {
        return 'Edge Explore 1000';
    }
}

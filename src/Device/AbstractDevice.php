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

use Libralyze\Devices\Distributor\DistributorProfile;

abstract class AbstractDevice implements DeviceInterface
{
    public function getFullName()
    {
        return $this->getDistributor()->getName().' '.$this->getName();
    }

    public function getDistributor()
    {
        return DistributorProfile::get($this->getDistributorEnum());
    }

    public function hasBarometer()
    {
        return false;
    }

    /**
     * @return string
     */
    public function getNameOfClass()
    {
        return static::class;
    }
}

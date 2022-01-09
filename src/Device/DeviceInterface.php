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

use Libralyze\Devices\Distributor\DistributorInterface;

interface DeviceInterface
{
    /**
     * @return int
     */
    public function getEnum();

    /**
     * @return string
     */
    public function getName();

    /**
     * @return string device name with distributor name as prefix
     *
     * @codeCoverageIgnore
     */
    public function getFullName();

    /**
     * @return int
     */
    public function getDistributorEnum();

    /**
     * @return DistributorInterface
     */
    public function getDistributor();

    /**
     * @return bool
     *
     * @codeCoverageIgnore
     */
    public function hasBarometer();
}

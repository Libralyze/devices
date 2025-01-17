<?php

/*
 * This file is part of the Libralyze Device List.
 *
 * (c) RUNALYZE <mail@runalyze.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Libralyze\Devices\Mapping;

use Libralyze\Devices\Device\DeviceProfile;

class SigmaSportFitSdkMapping
{
    /** @var int[]|string[] */
    protected $Mapping = [];

    protected function getMapping()
    {
        return [
            46 => DeviceProfile::SIGMA_SPORT_ID_TRI,
            44 => DeviceProfile::SIGMA_SPORT_ROX_120_SPORT,
            41 => DeviceProfile::SIGMA_SPORT_ROX_110_GPS,
            15 => DeviceProfile::SIGMA_SPORT_ROX_100_GPS,
        ];
        /*
         * Unknown:
         * 46
         */
    }

    public function __construct()
    {
        $this->Mapping = $this->getMapping();
    }

    /**
     * @param  int|string $value
     * @return int|string
     */
    public function toInternal($value)
    {
        if (isset($this->Mapping[$value])) {
            return $this->Mapping[$value];
        }

        return;
    }
}

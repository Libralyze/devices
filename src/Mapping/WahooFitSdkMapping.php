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

class WahooFitSdkMapping
{
    /** @var int[]|string[] */
    protected $Mapping = [];

    protected function getMapping()
    {
        return [
            0 => DeviceProfile::WAHOO_UNKNOWN,
            28 => DeviceProfile::WAHOO_ELEMNT,
            31 => DeviceProfile::WAHOO_ELEMNT_BOLT,
            37 => DeviceProfile::WAHOO_ELEMNT_ROAM,
        ];
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

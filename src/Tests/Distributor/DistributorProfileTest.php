<?php

/*
 * This file is part of the Libralyze Device List.
 *
 * (c) RUNALYZE <mail@runalyze.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Libralyze\Devices\Tests\Distributor;

use Libralyze\Devices\Distributor\DistributorInterface;
use Libralyze\Devices\Distributor\DistributorProfile;

class DistributorProfileTest extends \PHPUnit\Framework\TestCase
{
    public function testThatAllClassesExist()
    {
        foreach (DistributorProfile::getEnum() as $enum) {
            $distributor = DistributorProfile::get($enum);

            $this->assertInstanceOf(DistributorInterface::class, $distributor);
            $this->assertEquals($enum, $distributor->getEnum());
            if (!strpos($distributor->getNameOfClass(), 'App')) {
                $this->assertNotEmpty($distributor->getName());
            }
        }
    }
}

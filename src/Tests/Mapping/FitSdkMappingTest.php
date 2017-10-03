<?php

/*
 * This file is part of the Runalyze Device List.
 *
 * (c) RUNALYZE <mail@runalyze.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Runalyze\Devices\Tests\Mapping;

use Runalyze\Devices\Mapping\FitSdkMapping;

class FitSdkMappingTest extends \PHPUnit_Framework_TestCase
{
    /** @var FitSdkMapping */
    protected $Mapping;

    public function setUp()
    {
        $this->Mapping = new FitSdkMapping();
    }

    public function testThatAllClassesExist()
    {
        $this->assertEquals(22, $this->Mapping->toInternal(2132));
        $this->assertEquals(23, $this->Mapping->toInternal(2691));
        $this->assertEquals(82, $this->Mapping->toInternal(474));
        $this->assertEquals(null, $this->Mapping->toInternal(1));
    }
}

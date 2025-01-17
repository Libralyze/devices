<?php

/*
 * This file is part of the Libralyze Device List.
 *
 * (c) RUNALYZE <mail@runalyze.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Libralyze\Devices\Tests\Mapping;

use Libralyze\Devices\Mapping\SuuntoFitSdkMapping;

class SuuntoFitSdkMappingTest extends \PHPUnit\Framework\TestCase
{
    /** @var SuuntoFitSdkMapping */
    protected $Mapping;

    public function setUp(): void
    {
        $this->Mapping = new SuuntoFitSdkMapping();
    }

    public function testSomeExamples()
    {
        $this->assertEquals(232, $this->Mapping->toInternal(15));
        $this->assertEquals(88, $this->Mapping->toInternal(20));
        $this->assertEquals(87, $this->Mapping->toInternal(25));
        $this->assertNull($this->Mapping->toInternal(500));
    }
}

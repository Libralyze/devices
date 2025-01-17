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

use Libralyze\Devices\Mapping\CorosFitSdkMapping;

class CorosFitSdkMappingTest extends \PHPUnit\Framework\TestCase
{
    /** @var CorosFitSdkMapping */
    protected $Mapping;

    public function setUp(): void
    {
        $this->Mapping = new CorosFitSdkMapping();
    }

    public function testSomeExamples()
    {
        $this->assertEquals(158, $this->Mapping->toInternal(831));
        $this->assertEquals(159, $this->Mapping->toInternal(841));
        $this->assertNull($this->Mapping->toInternal(1));
    }
}

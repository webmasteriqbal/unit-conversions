<?php

namespace Webmasteriqbal\UnitConversions\Tests;

use PHPUnit\Framework\TestCase;
use Webmasteriqbal\UnitConversions\Wight;

class WightTest extends TestCase
{
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }

    /** @test */
    public function it_can_convert_kilograms_to_lbs()
    {
        $lbs = Wight::fromKilograms(100)->toLbs();
        $this->assertEquals(220.46, $lbs);
    }
}

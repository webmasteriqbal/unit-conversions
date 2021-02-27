<?php

namespace Webmasteriqbal\UnitConversions\Tests;

use PHPUnit\Framework\TestCase;
use Webmasteriqbal\UnitConversions\Temperature;
use Webmasteriqbal\UnitConversions\Wight;

class TemperatureTest extends TestCase
{

    /** @test */
    public function it_can_convert_celsius_to_fahrenheit()
    {
        $fahrenheit = Temperature::fromCelsius(100)->toFahrenheit();
        $this->assertEquals(212, $fahrenheit);
    }
}

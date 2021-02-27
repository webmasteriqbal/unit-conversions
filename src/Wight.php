<?php

namespace Webmasteriqbal\UnitConversions;

class Wight
{
    private float $kilograms;

    public static function fromKilograms(float $kilograms): self
    {
        return new static($kilograms);
    }

    public function __construct(float $kilograms)
    {
        $this->kilograms = $kilograms;
    }

    public function toLbs()
    {
        return $this->kilograms * 2.2046;
    }
}

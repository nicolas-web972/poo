<?php

class Speedometer
{
    public const MILES_CONVERSION = 0.6215;

    public static function convertKmToMiles(float $distance): float
    {
        return number_format(($distance = $distance * self::MILES_CONVERSION),2);
    }
    
    public static function convertMilesToKm(float $distance): float
    {
        return $distance = $distance / self::MILES_CONVERSION;
    }
}
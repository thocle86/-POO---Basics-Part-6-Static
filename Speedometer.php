<?php

Class Speedometer
{
    public const KMTOMILES = 0.621;

    public static function convertKmToMiles($km)
    {
        return round($km * self::KMTOMILES, 2);
    }

    public static function convertMilesToKm($miles)
    {
        return round($miles / self::KMTOMILES, 2);
    }
}

<?php

class Speedometer
{
    const MILESTOKM = 1.609344;
    const KMTOMILES = 0.6213712;

    public static function convertMilesKM($km)
    {
        return $km * self::KMTOMILES;
    }

    public static function convertKmMiles($miles)
    {
        return $miles * self::MILESTOKM;
    }
}


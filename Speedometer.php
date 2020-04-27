<?php

class Speedometer
{
    const MILESTOKM = 1.609344;
    const KMTOMILES = 0.6213712;

    public static function convertMilesKM($km)
    {
        $calcul = self::KMTOMILES * $km;
        return round($calcul, 2);
    }

    public static function convertKmMiles($km)
    {
        $calcul = self::MILESTOKM * $km;
        return round($calcul, 2);
    }
}

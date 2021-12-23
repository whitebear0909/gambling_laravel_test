<?php

namespace App\Helpers;

class Helper
{
    /**
     * This function return the distance between two point(latitude, longitude)
     * formula - https://en.wikipedia.org/wiki/Great-circle_distance
     *
     * @param float  $latitude_a   latitude of first endpoint
     * @param float  $longitude_a  longitude of first endpoint
     * @param float  $latitude_b   latitude of second endpoint
     * @param float  $longitude_b  longitude of second endpoint
     * @return float  $distance   distance between two point
     */
    public static function getDistance($latitude_a, $longitude_a, $latitude_b, $longitude_b, $worldradius = 6371.0088)
    {
        //get radians of latitude and longitude
        $rad_latitude_b = pi() * $latitude_b / 180;
        $rad_longitude_b = pi() * $longitude_b / 180;

        $rad_latitude_a = pi() * $latitude_a / 180;
        $rad_longitude_a = pi() * $longitude_a / 180;

        //get absolute longitude difference value
        $abs_longitude_diff = abs($rad_longitude_a - $rad_longitude_b);

        $cent_degree = acos(sin($rad_latitude_a) * sin($rad_latitude_b) + cos($rad_latitude_a) * cos($rad_latitude_b) * cos($abs_longitude_diff));

        $distance = $worldradius * $cent_degree;
        return $distance;
    }
}
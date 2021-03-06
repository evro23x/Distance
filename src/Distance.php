<?php

namespace evro23x;

class Distance
{
    public function calculateTheDistance ($arg1, $arg2, $arg3, $arg4) {

        // перевести координаты в радианы
        $lat1 = $arg1 * M_PI / 180;
        $lat2 = $arg3 * M_PI / 180;
        $long1 = $arg2 * M_PI / 180;
        $long2 = $arg4 * M_PI / 180;

        // косинусы и синусы широт и разницы долгот
        $cl1 = cos($lat1);
        $cl2 = cos($lat2);
        $sl1 = sin($lat1);
        $sl2 = sin($lat2);
        $delta = $long2 - $long1;
        $cdelta = cos($delta);
        $sdelta = sin($delta);

        // вычисления длины большого круга
        $y = sqrt(pow($cl2 * $sdelta, 2) + pow($cl1 * $sl2 - $sl1 * $cl2 * $cdelta, 2));
        $x = $sl1 * $sl2 + $cl1 * $cl2 * $cdelta;

        //
        $ad = atan2($y, $x);
        // Радиус земли = 6372795
        $dist = $ad * 6372795;

        return round($dist);
    }
}
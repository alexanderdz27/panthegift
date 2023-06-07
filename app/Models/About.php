<?php

namespace App\Models;

class About
{
    private static $About_team = [
        [
            "image" => "image/foto_atam.jpeg",
            "name" => "Muhammad Khatam Ramadhan",
            "ig" =>"RP.100.000",
            "fb" => ""
        ],
        [
            "image" => "image/kartun.png",
            "name" => "Muhammad Alexander Dzulkarnain",
            "ig" =>"RP.100.000",
            "fb" => ""
        ],
        [
            "image" => "image/foto_bagas.jpeg",
            "name" => "Bagas Arjun Valentino",
            "ig" =>"RP.100.000",
            "fb" => ""
        ]
    ];

    public static function all()
    {
        return collect(self::$About_team);
    }
}
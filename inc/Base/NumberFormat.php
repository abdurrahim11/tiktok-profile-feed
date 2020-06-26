<?php


namespace Inc\Base;


class NumberFormat
{
    public static function print_number_count($n, $precision = 1) {


        if ($n < 900) {
            // Default
            $n_format = number_format($n);
        } else if ($n < 900000) {
            // Thausand
            $n_format = number_format($n / 1000, $precision). 'K';
        } else if ($n < 900000000) {
            // Million
            $n_format = number_format($n / 1000000, $precision). 'M';
        } else if ($n < 900000000000) {
            // Billion
            $n_format = number_format($n / 1000000000, $precision). 'B';
        } else {
            // Trillion
            $n_format = number_format($n / 1000000000000, $precision). 'T';
        }
        echo $n_format;
    }
}
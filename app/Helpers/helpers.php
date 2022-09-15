<?php

use Morilog\Jalali\Jalalian;

/**
 * @param $date
 * @param $format
 * @return void
 *
 * Jalali calendar is a solar calendar that was used in Persia, variants of which today are still in use in Iran as well as Afghanistan. Read more on Wikipedia or see Calendar Converter.
 * Calendar conversion is based on the algorithm provided by Kazimierz M. Borkowski and has a very good performance.
 * CalendarUtils class was ported from jalaali/jalaali-js
 *
 * Jalalian::forge('today')->format('%A, %d %B %y'); // جمعه، 23 اسفند 97
 *
 */
function jalaliDate($date = 'today', $format = '%A, %d %B %Y')
{
    return Jalalian::forge($date)->format($format);
}

function active($route)
{
    return !Illuminate\Support\Facades\Route::is($route) ?: 'active';
}

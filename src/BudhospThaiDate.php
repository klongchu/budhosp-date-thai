<?php
/**
 *
 * @package BUDHOSPThaidate
 * @version 1.0.0
 * @author Klongchu Dev.
 * @license http://opensource.org/licenses/MIT
 *
 */

namespace Klongchu\Budhosp;

class Budhosp
{
    public function ThaiDate($date)
    {
        $year = date("Y", strtotime($date)) + 543;
        $month = date("n", strtotime($date));
        $day = date("j", strtotime($date));
        $monthCut = ["", "ม.ค.", "ก.พ.", "มี.ค.", "เม.ย.", "พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.", "ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค."];
        $monthThai = $monthCut[$month];
        return "$day $monthThai $year";
    }

    public function ThaiDateTime($date)
    {
        $year = date("Y", strtotime($date)) + 543;
        $month = date("n", strtotime($date));
        $day = date("j", strtotime($date));
        $Hour = date("H", strtotime($date));
        $Minute = date("i", strtotime($date));
        $monthCut = ["", "ม.ค.", "ก.พ.", "มี.ค.", "เม.ย.", "พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.", "ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค."];
        $monthThai = $monthCut[$month];
        return "$day $monthThai $year $Hour:$Minute";
    }
}

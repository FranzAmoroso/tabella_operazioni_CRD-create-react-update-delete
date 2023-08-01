<?php

$date1 = date("d M Y", time());
$date2 = date("H:i", time());
$data3 = date("N");

date_default_timezone_set('UTC');

switch($data3){
    case 1:
        $data3 = "Lunedì";
        break;
    case 2:
        $data3 = "Martedi";
        break;
    case 3:
        $data3 = "Mercoledì";
        break;
    case 4:
        $data3 = "Giovedì";
        break;
    case 5:
        $data3 = "Venerdì";
        break;
    case 6:
        $data3 = "Sabato";
        break;
    case 7:
        $data3 = "Domenica";
        break;
}
echo "oggi è il giorno".' '. $date1.' '.",è sono le ore"." ".$date2.", ".$data3

?>
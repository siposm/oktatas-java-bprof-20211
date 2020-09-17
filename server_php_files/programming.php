<?php

    $htmlContent = file_get_contents("website.html");

    $euro = 380;
    $replacedHtmlContent = str_replace("{EURO}", $euro, $htmlContent);

    // create curl resource
    // $ch = curl_init();
    // curl_setopt($ch, CURLOPT_URL, "https://users.nik.uni-obuda.hu/siposm/db/workers.xml");
    // curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // $output = curl_exec($ch);
    // curl_close($ch);
    // echo $output;

    echo $replacedHtmlContent;

    // for ($i=0; $i < 20; $i++) { 
    //     $temp = $i + 1;
    //     echo "{$temp} <br>";
    // }

    // echo "<hr>";

    // $array = [ 1,2,10,5,678,23,2300,789,341,1,5,6,7212,34,568 ];
    // $sum = 0;

    // for ($i=0; $i < count($array); $i++) { 
    //     if( $array[$i] % 2 == 1 )
    //         echo "{$array[$i]} <br>";
    //     else
    //         $sum += $array[$i];
    // }

    // echo "<b> SUM = {$sum} </b>";
?>
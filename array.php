<?php 

    //array dimensi

    // $nama = array("joni","tejo","budi","siti",100, 2.5);

    // var_dump($nama);
    // echo "<br>";

    // echo $nama[5];
    // echo "<br>";

    // // for ($i=0; $i < 6; $i++) { 
    // //     // echo $i;
    // //     echo $nama[$i]."<br>";
    // // }

    // foreach ($nama as $key) {
    //     echo $key."<br>";
    // }

    //array asosiatif

    // $nama = array(
    //     "joni" => "surabaya",
    //     "tejo" => "malang raya",
    //     "budi" => "jakarta",
    //     "siti" => "sidoarjo"
    // );

    $nama["joni"]="surabaya";
    $nama["tejo"]="malang raya";
    $nama["budi"]="jakarta";
    $nama["siti"]="sidoarjo";
    $nama["edi"]="semarang";

    var_dump($nama);
    echo "<br>";

    // echo $nama['budi'];

    foreach ($nama as $key => $value) {
        echo $key." => ".$value;
        echo "<br>";
    }

?>
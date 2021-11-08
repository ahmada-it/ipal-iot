<?php
    include("koneksi.php");
    $node = $_GET['node'];
	$pH = $_GET['pH'];
    $Suhu = $_GET['Suhu'];
    $TSS = $_GET['TSS'];
    $DO = $_GET['DO'];
	date_default_timezone_set("Asia/Jakarta");
	$date = date("Y-m-d h:i:s");

    if($node == 1){
        $q = mysqli_query($conn,"INSERT INTO node_ipal_1 (datetime,pH,Suhu,TSS,DO) VALUES ('$date','$pH','$Suhu','$TSS','$DO')");
        if($q)
        {
            echo "Sukses";
        }
    }
    elseif ($node == 2) {
        $q = mysqli_query($conn,"INSERT INTO node_ipal_2 (datetime,pH,Suhu,TSS,DO) VALUES ('$date','$pH','$Suhu','$TSS','$DO')");
        if($q)
        {
            echo "Sukses";
        }
    }
    elseif ($node == 3) {
        $q = mysqli_query($conn,"INSERT INTO node_ipal_3 (datetime,pH,Suhu,TSS,DO) VALUES ('$date','$pH','$Suhu','$TSS','$DO')");
        if($q)
        {
            echo "Sukses";
        }
    }
    elseif ($node == 4) {
        $q = mysqli_query($conn,"INSERT INTO node_ipal_4 (datetime,pH,Suhu,TSS,DO) VALUES ('$date','$pH','$Suhu','$TSS','$DO')");
        if($q)
        {
            echo "Sukses";
        }
    }
    elseif ($node == 5) {
        $q = mysqli_query($conn,"INSERT INTO node_ipal_5 (datetime,pH,Suhu,TSS,DO) VALUES ('$date','$pH','$Suhu','$TSS','$DO')");
        if($q)
        {
            echo "Sukses";
        }
    }
    // $q = mysqli_query($conn,"INSERT INTO tb_dht (humidity,temperature,datetime) VALUES ('$humidity','$temperature','$date')");
    // if($q)
    // {
    // 	echo "Sukses";
    // }
?>
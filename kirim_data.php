<?php
    include("koneksi.php");
    $node = $_GET['node'];
	$pH = $_GET['pH'];
    $suhu = $_GET['suhu'];
    $TSS = $_GET['TSS'];
	date_default_timezone_set("Asia/Jakarta");
	$date = date("Y-m-d h:i:s");

    if($node == 1){
        $q = mysqli_query($conn,"INSERT INTO node_ipal_1 (datetime,pH,suhu,TSS) VALUES ('$date','$pH','$suhu','$TSS')");
        if($q)
        {
            echo "Sukses";
        }
    }
    elseif ($node == 2) {
        $q = mysqli_query($conn,"INSERT INTO node_ipal_1 (datetime,pH,suhu,TSS) VALUES ('$date','$pH','$suhu','$TSS')");
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
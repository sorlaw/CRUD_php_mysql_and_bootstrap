<?php

//deklasrasi variabel
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "db_sekolah";

$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if($connection){
    echo "";
}else{
    echo "koneksi gagal! : ". mysqli_connect_error();
}

?>

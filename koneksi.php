<?php

$con = mysqli_connect("localhost", "root", "", "biodataletris_app");

if(!$con) {
    die('koneksi gagal'.mysqli_connect_error());
}

?>
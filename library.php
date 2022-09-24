<?php

    session_start();

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'db_kampus';

    $mysqli = mysqli_connect ($host, $user, $pass, $db);

    // Connection Check

    if ($mysqli) {
        echo "Berhasil Terhubung";
    }
    else {
        echo "Gagal terhubung";
    }
?>
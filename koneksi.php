<?php
//  Koneksi ke database menggunakan PDO

function koneksi(): PDO
{
    $host      = "localhost";
    $port      = 3308;
    $database  = "todo-listdncc";
    $username  = "root";
    $password  = "";

    return new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
}

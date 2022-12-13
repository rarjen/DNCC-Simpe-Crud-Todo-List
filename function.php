<?php

require_once __DIR__ . "/koneksi.php";

function ambilData()
{
    $koneksi = koneksi();
    $sql = "SELECT * FROM latihan_todolist";
    $result = $koneksi->query($sql);

    return $result;
}


function ambilSatuData($id)
{
    $koneksi = koneksi();
    $sql = "SELECT * FROM latihan_todolist WHERE id=$id";
    $result = $koneksi->query($sql);

    // query itu untuk menampilkan result

    return $result;
}

function tambahData($tugas, $deadline)
{
    $koneksi = koneksi();
    $sql = "INSERT INTO `latihan_todolist`(`muhammad_tugas`, `deadline`) VALUES ('$tugas','$deadline')";
    $result = $koneksi->exec($sql);

    return $result;
}

function editData($id, $tugas, $deadline)
{
    $koneksi = koneksi();
    $sql = "UPDATE `latihan_todolist` SET `muhammad_tugas`='$tugas',`deadline`='$deadline' WHERE id = $id";
    $result = $koneksi->exec($sql);

    return $result;
}

function hapusData($id)
{
    $koneksi = koneksi();
    $sql = "DELETE FROM `latihan_todolist` WHERE id = $id";
    $result = $koneksi->exec($sql);

    return $result;
}

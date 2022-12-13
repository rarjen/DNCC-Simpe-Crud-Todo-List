<?php
require_once __DIR__ . "/function.php";


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $data = ambilSatuData($id)->fetch();
} else {
    header("location: index.php");
}

if (isset($_POST['editData'])) {
    $tugas = $_POST['tugas'];
    $deadline = $_POST['deadline'];

    editData($data['id'], $tugas, $deadline);

    header("location: index.php");
}

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>my todolist</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                Mau Melakukan Apa Hari Ini
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="tugas" class="form-label">Tugas</label>
                        <input type="text" name="tugas" class="form-control" id="tugas" value="<?php echo $data['muhammad_tugas'] ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="deadline" class="form-label">Deadline</label>
                        <input type="date" name="deadline" class="form-control" id="deadline" value="<?php echo $data['deadline'] ?>" required>
                    </div>

                    <button type="submit" name="editData" class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>

    </div>
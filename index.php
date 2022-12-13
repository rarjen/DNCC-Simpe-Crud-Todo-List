<?php
require_once __DIR__ . "/function.php";

if (isset($_POST['tambahData'])) {
  $tugas = $_POST['tugas'];
  $deadline = $_POST['deadline'];

  tambahData($tugas, $deadline);

  header("location: index.php");
}

if (isset($_GET['id'])) {
  $id = $_GET['id'];

  // hapusData($id);
  hapusData($id);
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
        <form action="index.php" method="POST">
          <div class="mb-3">
            <label for="tugas" class="form-label">Tugas</label>
            <input type="text" name="tugas" class="form-control" id="tugas" required>
          </div>

          <div class="mb-3">
            <label for="deadline" class="form-label">Deadline</label>
            <input type="date" name="deadline" class="form-control" id="deadline" required>
          </div>

          <button type="submit" name="tambahData" class="btn btn-success">Submit</button>
        </form>
      </div>
    </div>


    <div class="card">
      <div class="card-body">
        <table class="table table-striped table-hover ">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Tugas</th>
              <th scope="col">Deadline</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>

          <tbody>
            <?php
            $nomor = 1;


            foreach (ambilData() as $data) { ?>
              <tr>
                <th scope="row"><?php echo $nomor++ ?></th>
                <td><?php echo $data['muhammad_tugas'] ?></td>
                <td><?php echo date("d F Y", strtotime($data['deadline'])) ?></td>
                <td>
                  <a href="edit.php?id=<?php echo $data["id"] ?>" class="btn btn-warning">Edit</a>
                  <a href="?id=<?php echo $data["id"] ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')" class="btn btn-danger">Delete</a>
                </td>
              </tr>

            <?php } ?>
          </tbody>

        </table>
      </div>
    </div>
  </div>












  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>
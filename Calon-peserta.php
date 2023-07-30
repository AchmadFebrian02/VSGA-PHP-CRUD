<?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $database = "crud";
    
    $koneksi = mysqli_connect($server, $user, $pass, $database) or die (mysqli_error($koneksi));
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- Link ke Bootstrap CSS dan Font Awesome Icons -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <span class="fs-4"><a href="index.php">Digital Talent</a></span>
            <li><a href="#" class="nav-link px-4 link-body-emphasis">Calon Peserta</a></li>
            <li><a href="Daftarbaru.php" class="nav-link px-2 link-secondary">Daftar Baru</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container mt-3">
    <header class="d-flex align-items-center pb-3 mb-5 border-bottom">
      <h3>Peserta</h3>

      <style>
      .custom-table {
        background-color: black;
        color: clay;
      }
      .custom-table th,
      .custom-table td {
        border-color: clay;
      }
    </style>
    </header>

      <!-- Tabel Data Peserta -->
      <table class="table table-bordered table-striped">
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Sekolah Asal</th>
            <th>Tindakan</th>
          </tr>
          <?php
            $no = 1;
            $tampil = mysqli_query($koneksi, "SELECT * from datasiswa order by id_siswa desc");
            while ($data = mysqli_fetch_array($tampil)) :

          ?>
          <tr>
            <td><?=$no++;?></td>
            <td><?=$data['nama_siswa'];?></td>
            <td><?=$data['alamat'];?></td>
            <td><?=$data['jenis_kelamin'];?></td>
            <td><?=$data['agama'];?></td>
            <td><?=$data['sekolah_asal'];?></td>
            <td>
                <a href="#" class="btn btn-warning">Edit</a>
                <a href="#" class="btn btn-danger">Delete</a>
            </td>
            <?php endwhile; ?>
          </tr>
      </table>
    </div>

    <!-- Link ke Bootstrap CSS dan Font Awesome Icons -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  </body>
</html>
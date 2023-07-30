<?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $database = "crud";
    
    $koneksi = mysqli_connect($server, $user, $pass, $database) or die (mysqli_error($koneksi));

    if(isset($_POST['simpan']))
    {
        $simpan = mysqli_query($koneksi, "INSERT INTO by datasiswa (nama_siswa, alamat, jenis_kelamin, agama, sekolah_asal)
        VALUES ('$_POST[nama]',
        '$_POST[alamat]',
        '$_POST[jenisKelamin]',
        '$_POST[agama]', 
        '$_POST[sekolah]')
        ");
        
    if($simpan)
        {
            echo "<script>
                    alert('simpan data sukses!');
                    document.location='Calon-peserta.php';
                    </script>";
        }
    else
        {
            echo "<script>
                    alert('simpan data gagal!');
                    document.location='Calon-peserta.php';
                    </script>";
        }
    }

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
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <span class="fs-4">Digital Talent</span>
            <li><a href="Calon-peserta.php" class="nav-link px-4 link-body-emphasis">Calon Peserta</a></li>
            <li><a href="#" class="nav-link px-2 link-secondary">Daftar Baru</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container mt-3">
      <h3>Tambah Data Peserta</h3>
      <div class="mb-3 row mt-4">
        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
          <input type="text" id="nama" name="nama" class="form-control">
        </div>
      </div>

      <div class="mb-3 row mt-4">
        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-10">
          <textarea class="form-control" id="alamat" name="alamat" type="text"></textarea>
        </div>
      </div>
    </div>
    <div class="container mt-4">
      <div class="form-group row">
        <label for="jenisKelamin" class="col-sm-2" name="jenisKelamin">Pilih Jenis Kelamin:</label>
        <div class="col-sm-5">
          <div class="form-check">
            <input type="radio" name="jenisKelamin" class="form-check-input" value="Laki-laki" id="laki-laki">
            <label class="form-check-label" for="laki-laki">Laki-laki</label>
          </div>
          <div class="form-check">
            <input type="radio" name="jenisKelamin" class="form-check-input" value="Perempuan" id="perempuan">
            <label class="form-check-label" for="perempuan">Perempuan</label>
          </div>
        </div>
      </div>
    </div>

    <div class="container mt-4">
      <form>
        <div class="form-group row">
          <label for="agama" class="col-sm-2" name="agama">Agama</label>
          <div class="col-sm-10">
            <div class="input-group">
              <select class="form-control" id="agama" name="agama">
                <option value="">Pilih Salah Satu</option>
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Katolik">Katolik</option>
                <option value="Hindu">Hindu</option>
                <option value="Buddha">Buddha</option>
                <option value="Konghucu">Konghucu</option>
                <option value="Lainnya">Lainnya</option>
              </select>
              <div class="input-group-append">
                <span class="input-group-text">
                  <i class="fa fa-caret-down"></i>
                </span>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>

    <div class="container mt-3">
      <div class="mb-3 row mt-4">
        <label for="sekolah" class="col-sm-2 col-form-label">Sekolah Asal</label>
        <div class="col-sm-10">
          <input type="text" id="sekolah" name="sekolah" class="form-control">
        </div>
      </div>
    </div>

    <!-- Tombol Simpan (warna biru) -->
    <div class="container mt-3">
    <button type="submit" class="btn btn-primary" name="simpan">submit</button>
      <button type="reset" class="btn btn-info" name="reset">Reset</button>
      <button type="button" class="btn btn-success">Kembali</button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
  </body>
</html>

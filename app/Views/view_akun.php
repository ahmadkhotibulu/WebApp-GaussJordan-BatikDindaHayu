<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aplikasi Estimasi Jumlah Produksi UMKM Batik Dinda Hayu Menggunakan Metode Gauss-Jordan</title>
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="<?= base_url('assets/css/styles.css');?>">
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-md navbar-dark bg-success shadow-sm">
      <div class="container-fluid">
        <a href="<?= base_url('');?>" class="navbar-brand">BatikDindaHayu</a>
        <p class="text-white my-auto"><i class="bi bi-person-circle"></i> &nbsp;<?= session()->get('namaLengkap'); ?></p>
      </div>
    </nav>
  </header>
  <div class="d-flex">
    <nav id="sidebar" class="navbar bg-dark navbar-dark align-items-start shadow-sm min-vh-100">
      <ul class="navbar-nav d-flex flex-column mt-2" role="list" style="width: 11rem">
        <li class="nav-item">
          <a class='nav-link px-4 py-2' href="<?= base_url('beranda-page');?>">
            <i class="bi bi-house-door-fill"></i> Beranda
          </a>
        </li>
        <li class="nav-item">
          <a class='nav-link px-4 py-2' href="<?= base_url('penghitungan-page');?>">
            <i class="bi bi-calculator-fill"></i> Penghitungan
          </a>
        </li>
        <li class="nav-item">
          <a class='nav-link active px-4 py-2' aria-current="page" href="<?= base_url('akun-page');?>">
            <i class="bi bi-gear-fill"></i> Akun
          </a>
        </li>
        <hr class="border border-light w-75 mx-auto">
        <li class="nav-item">
          <a class='nav-link px-4 py-2' href="<?= base_url('logout');?>">
            <i class="bi bi-box-arrow-left"></i> Logout
          </a>
        </li>
      </ul>
    </nav>
    <main class="w-100">
      <article class="bg-white mx-auto p-4 border-bottom border-success my-4 shadow-sm pb-5" style="max-width: 60rem;">
        <h2 class="text-success ff-heading">Pengaturan Akun</h2>
        <p>Perbarui data akun anda di sini.</p>
        <hr class="border-dark">
        <?php
          $session = session();
          $sessionStatus = $session->get('status');
          if ($sessionStatus) {
            $ok = $sessionStatus['ok'];
            $message = $sessionStatus['message'];
            if ($ok) echo "<p class='message-success' style='color: green;'>$message</p>";
            else echo "<p class='message-danger' style='color: red;'>$message</p>";
            $session->setTempdata('status', null, 0);
            $session->remove('status');
          }
        ?>
        <?= form_open(base_url('ubah-akun'), ['class'=>'d-flex flex-column gap-2 w-100']); ?>
          <label class='text-success fw-bold mt-2' for="nama_lengkap"><i class="bi bi-person-badge"></i> Nama Lengkap</label>
          <input class="form-control" type="text" name="nama_lengkap" id="nama_lengkap" value="<?= $session->get('namaLengkap');?>" required>
          <label class='text-success fw-bold mt-2' for="password"><i class="bi bi-key-fill"></i> Password Saat Ini</label>
          <input class="form-control" type="password" name="password" id="password" required>
          <hr class="border-dark">
          <label class='text-success fw-bold' for="password_baru"><i class="bi bi-key-fill"></i> Password Baru <span style="opacity: 0.7; font-size: 0.65em;">(opsional)</span></label>
          <input class="form-control" type="password" name="password_baru" id="password_baru">
          <label class='text-success fw-bold mt-2' for="password_ulang"><i class="bi bi-key"></i> Ulangi Password Baru <span style="opacity: 0.7; font-size: 0.65em;">(opsional)</span></label>
          <input class="form-control" type="password" name="password_ulang" id="password_ulang">
          <input class='btn btn-success fw-bold px-3 py-2 mt-3' type="submit" value="Ubah">
        <?= form_close(); ?>
        <hr class="border-dark">
      </article>
    </main>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
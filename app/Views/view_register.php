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
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-md-2" role="list">
            <li class="nav-item me-md-2">
              <a class="nav-link" href="<?= base_url('petunjuk-page');?>"><i class="bi bi-question-circle-fill"></i> Petunjuk Penggunaan</a>
            </li>
            <li class="nav-item me-md-2">
              <a class="nav-link" href="<?= base_url('pengembang-page');?>"><i class="bi bi-journal-text"></i> Pengembang</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <main>
    <article class="mx-auto my-4 bg-body p-4 border-bottom border-success shadow-sm" style="max-width: 55rem;">
      <div class="bg-success py-3">
        <h1 class="text-center fs-2 mx-auto text-light fw-normal px-3 ff-heading" style="max-width: 32ch;">
          Aplikasi Estimasi Jumlah Produksi <b class="fw-bold">UMKM Batik Dinda Hayu</b> Menggunakan Metode Gauss-Jordan
        </h1>
      </div>
      <hr class="border-dark">
      <h2 class="fs-1 text-success ff-heading">Halaman Registrasi</h2>
      <p class="fs-6 mb-4">Masukkan data diri, lalu klik Register untuk mendaftar akun baru.</p>
      <?php
        $session = session();
        $sessionStatus = $session->get('status');
        if ($sessionStatus) {
          $ok = $sessionStatus['ok'];
          $message = $sessionStatus['message'];
          if ($ok) echo "<p class='message-success mb-2' style='color: green;'>$message</p>";
          else echo "<p class='message-danger mb-2' style='color: red;'>$message</p>";
          $session->setTempdata('status', null, 0);
          $session->remove('status');
        }
      ?>
      <?php echo form_open(base_url('register'), ['class'=>'d-flex flex-column gap-2']);?>
        <label class="text-success fw-bold" for="nama_lengkap"><i class="bi bi-person-badge"></i> Nama Lengkap</label>
        <input class="form-control" type="text" name="nama_lengkap" id="nama_lengkap" required>
        <label class="text-success fw-bold" for="username"><i class="bi bi-person-fill"></i> Username</label>
        <input class="form-control" type="text" name="username" id="username" pattern="^(?=.{3,24}$)(?![_.])(?!.*[_.]{2})[a-zA-Z0-9._]+(?<![_.])$" required>
        <label class="text-success fw-bold" for="password"><i class="bi bi-key-fill"></i> Password</label>
        <input class="form-control" type="password" name="password" id="password" required>
        <label class="text-success fw-bold" for="password_ulang"><i class="bi bi-key"></i> Ulangi Password</label>
        <input class="form-control" type="password" name="password_ulang" id="password_ulang" required>
        <input class='btn btn-success mt-2 px-3 py-2 fw-bold' type="submit" value="Register">
      <?php echo form_close();?>
      <hr class="border-dark mt-3">
      <p class="mt-3 text-center">Sudah memiliki akun? <a class="text-success fw-bold" href="<?= base_url('login-page');?>">Login</a> di sini.</p>
    </article>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
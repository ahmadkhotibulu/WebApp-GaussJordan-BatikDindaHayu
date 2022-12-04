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
          <a class='nav-link active px-4 py-2' aria-current="page" href="<?= base_url('penghitungan-page');?>">
            <i class="bi bi-calculator-fill"></i> Penghitungan
          </a>
        </li>
        <li class="nav-item">
          <a class='nav-link px-4 py-2' href="<?= base_url('akun-page');?>">
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
        <h2 class="text-success ff-heading">Hasil Penghitungan</h2>
        <p>Estimasi produksi yang diperoleh yakni sebagai berikut :</p>
        <hr class="border-dark">
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
        <?= form_open(''); ?>
          <fieldset>
            <legend class="fs-6 fw-bold text-success mt-2">Hasil Kalkulasi</legend>
              <table class="fw-100">
                <tr>
                  <td><label for="hasilX">&nbsp;&nbsp;Selendang Batik&nbsp;&nbsp;&nbsp;</label></td>
                  <td>:</td>
                  <td class="fs-4">
                    &nbsp;<?= floor($hasil[0]); ?><span class="" style="opacity: 0.7; font-size: 0.65em;"> &nbsp;( <?= $hasil[0]; ?> )</span>
                  </td>
                </tr>
                <tr>
                  <td><label for="hasilY">&nbsp;&nbsp;Baju Batik&nbsp;&nbsp;&nbsp;</label></td>
                  <td>:</td>
                  <td class="fs-4">
                    &nbsp;<?= floor($hasil[1]); ?><span style="opacity: 0.7; font-size: 0.65em;"> &nbsp;( <?= $hasil[1]; ?> )</span>
                  </td>
                </tr>
                <tr>
                  <td><label for="hasilZ">&nbsp;&nbsp;Tas Batik&nbsp;&nbsp;&nbsp;</label></td>
                  <td>:</td>
                  <td class="fs-4">
                    &nbsp;<?= floor($hasil[2]); ?> <span style="opacity: 0.7; font-size: 0.65em;"> &nbsp;( <?= $hasil[2]; ?> )</span>
                  </td>
                </tr>
              </table>
          </fieldset>
        <?= form_close(); ?>
        <hr class="border-dark">
      </article>
    </main>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
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
          <a class='nav-link active px-4 py-2' aria-current="page" href="<?= base_url('beranda-page');?>">
            <i class="bi bi-house-door-fill"></i> Beranda
          </a>
        </li>
        <li class="nav-item">
          <a class='nav-link px-4 py-2' href="<?= base_url('penghitungan-page');?>">
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
        <h3 class="text-success ff-heading">Batik Dinda Hayu</h3>
        <hr class="border-dark">
        <img class="img-fluid" src="<?= base_url('assets/images/batik-dindahayu-rumah.png');?>" alt="Rumah Batik Dinda Hayu">
        <p class="mt-3">
          Home Industry Batik Dinda Hayu memproduksi 3 jenis produk dan olahan batik tulis yakni selendang batik,
          baju batik, dan tas batik. Dalam pembuatan masing-masing jenis produk dibutuhkan 3 buah variabel yakni
          ukuran kain, biaya pewarnaan, dan lama pengerjaan. Berdasarkan hasil observasi wawancara, didapatkan data
          berikut:
        </p>
        <hr class="border-dark">
        <div class="mt-2 d-flex gap-4 justify-content-center">
          <img class="img-fluid" src="<?= base_url('assets/images/selendang-batik.png');?>" alt="Baju Batik" style="width: 20%;">
          <img class="img-fluid" src="<?= base_url('assets/images/baju-batik.png');?>" alt="Baju Batik" style="width: 20%;">
          <img class="img-fluid" src="<?= base_url('assets/images/tas-batik.png');?>" alt="Tas Batik" style="width: 20%;">
        </div>
        <ul class="mt-3">
          <li>Sebuah selendang batik membutuhkan kain berukuran 1.2m<sup>2</sup> dengan biaya pewarnaan Rp 25.000,-
          serta lama pengerjaan 2 minggu,</li>
          <li>Sebuah baju batik membutuhkan kain berukuran 4m<sup>2</sup> dengan biaya pewarnaan Rp 50.000,- serta
          lama pengerjaan 4 minggu, dan</li>
          <li>Sebuah tas batik membutuhkan kain berukuran 1m<sup>2</sup> dengan biaya pewarnaan Rp 35.000,- serta
          lama pengerjaan 4 minggu.</li>
        </ul>
        <hr class="border-dark">
        <p>
          Berdasarkan data hasil observasi, berapa banyak untuk masing-masing jenis produk dan olahan yang dapat
          diproduksi dari Home Industry Batik Dinda Hayu jika disediakan kain berukuran 36m<sup>2</sup>, dana pewarnaan
          sejumlah Rp 700.000,- serta waktu pengerjaan selama 60 minggu?
        </p>
        <hr class="border-dark">
      </article>
    </main>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
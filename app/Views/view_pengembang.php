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
              <a class="nav-link active" href="<?= base_url('petunjuk-page');?>"><i class="bi bi-question-circle-fill"></i> Petunjuk Penggunaan</a>
            </li>
            <li class="nav-item me-md-2">
              <a class="nav-link active" href="<?= base_url('pengembang-page');?>"><i class="bi bi-journal-text"></i> Pengembang</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <main>
    <article class="container border-bottom border-success my-4 p-4 bg-body shadow-sm">
      <a href="<?= base_url('back');?>" class="btn btn-success px-3 py-2 fw-bold">Kembali</a>
      <hr class="border-dark">
        <h2 class="mb-4 text-success text-center ff-heading">Pengembang Aplikasi</h2>
        <img class="mx-auto d-block img-fluid" src="<?= base_url('assets/images/dokumentasi.jpeg');?>" alt="Dokumentasi" style="max-width: min(100%, 35rem)">
        <div class="d-flex flex-wrap gap-5 justify-content-center mt-4 text-center">
          <ul class="list-unstyled">
            <li class="fw-bold">Ahmad Khotibul Umam</li>
            <li class="text-success fw-bold">NIM. 20330047</li>
            <li>(letak pada foto: kanan)</li>
            <li class="mt-3 fw-bold">Ahmad Fahrizzal Naim </li>
            <li class="text-success fw-bold">NIM. 20330053</li>
            <li>(letak pada foto: tengah)</li>
            <li class="mt-3 fw-bold">Hilarius Nahak</li>
            <li class="text-success fw-bold">NIM. 20330048</li>
          </ul>
          <ul class="list-unstyled">
            <li class="fw-bold">Eti</li>
            <li class="text-success fw-bold">Narasumber</li>
            <li>(letak pada foto: kiri)</li>
            <div class="position-relative pt-3" style="height: 18rem;">
              <img class="mx-auto d-block img-fluid position-absolute" src="<?= base_url('assets/images/person-bg-2.svg');?>" alt="Green colored shape">
              <img class="mx-auto d-block img-fluid position-absolute" src="<?= base_url('assets/images/dosenpembimbing-yumarlinmz.png');?>" alt="Ibu Yumarlin">
            </div>
            <li class="mt-3 fw-bold">Yumarlin MZ., S.Kom., M.Pd., M.Kom.</li>
            <li class="text-success fw-bold">Dosen Pembimbing</li>
            <li class="text-success fw-bold">Mata Kuliah Metode Numerik</li>
          </ul>
        </div>
      </article>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
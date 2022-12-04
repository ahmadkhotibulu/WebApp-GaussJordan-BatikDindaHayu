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
    <article class="container my-4 bg-body p-4 mx-auto border-bottom border-success shadow-sm">
      <a href="<?= base_url('back');?>" class="btn btn-success px-3 py-2 fw-bold">Kembali</a>
      <hr class="border-dark">
      <h2 class="mb-3 ff-heading text-success">Petunjuk Penggunaan</h2>
      <ul>
        <li>Pertama, login ke dalam aplikasi menggunakan akun anda.</li>
        <li>Jika belum memiliki akun, anda dapat mendaftar dengan menekan "Register" pada formulir login.</li>
        <li>Setelah berhasil login, masuk ke menu "Penghitungan" untuk melihat ataupun memasukkan jumlah bahan dan persediaan yang diperlukan.</li>
        <li>Jika dirasa jumlah bahan dan persediaan mencukupi, klik tombol "Hitung" untuk memulai penghitungan.</li>
        <li>Hasil penghitungan akan muncul sesuai dengan penghitungan yang berdasarkan metode eliminasi Gauss-Jordan.</li>
        <li>Dalam aplikasi ini, anda juga dapat memperbarui akun anda di menu "Akun".</li>
      </ul>
    </article>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
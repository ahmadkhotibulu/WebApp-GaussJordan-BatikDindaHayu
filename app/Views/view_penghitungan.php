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
        <h2 class="ff-heading text-success">Penghitungan</h2>
        <p>Masukkan data bahan dan persediaan yang dibutuhkan.</p>
        <hr class="border-black">
        <?= form_open(base_url('hitung'), ['class'=>'d-flex flex-column gap-2 w-100']); ?>
          <fieldset>
            <legend class="fs-6 text-success fw-bold mt-2">Ukuran Kain (m<sup>2</sup>)</legend>
            <table class="w-100">
              <tr>
                <td class="w-25"><label for="a11">&nbsp;&nbsp;Selendang Batik</label></td>
                <td class="w-25 text-end">:&nbsp;&nbsp;</td>
                <td><input class="form-control" type="number" name="a11" id="a11" value="<?= $matrikDefaultA[0][0];?>" step='0.1' required></td>
              </tr>
              <tr>
                <td class="w-25"><label for="a12">&nbsp;&nbsp;Baju Batik</label></td>
                <td class="w-25 text-end">:&nbsp;&nbsp;</td>
                <td><input class="form-control" type="number" name="a12" id="a12" value="<?= $matrikDefaultA[0][1];?>" step='0.1' required></td>
              </tr>
              <tr>
                <td class="w-25"><label for="a13">&nbsp;&nbsp;Tas Batik</label></td>
                <td class="w-25 text-end">:&nbsp;&nbsp;</td>
                <td><input class="form-control" type="number" name="a13" id="a13" value="<?= $matrikDefaultA[0][2];?>" step='0.1' required></td>
              </tr>
            </table>
          </fieldset>
          <hr class="border-dark">
          <fieldset>
            <legend class="fs-6 text-success fw-bold">Biaya Pewarnaan (Rp)</legend>
            <table class="w-100">
              <tr>
                <td class="w-25"><label for="a21">&nbsp;&nbsp;Selendang Batik</label></td>
                <td class="w-25 text-end">:&nbsp;&nbsp;</td>
                <td><input class="form-control" type="number" name="a21" id="a21" value="<?= $matrikDefaultA[1][0];?>" step='0.1' required></td>
              </tr>
              <tr>
                <td class="w-25"><label for="a22">&nbsp;&nbsp;Baju Batik</label></td>
                <td class="w-25 text-end">:&nbsp;&nbsp;</td>
                <td><input class="form-control" type="number" name="a22" id="a22" value="<?= $matrikDefaultA[1][1];?>" step='0.1' required></td>
              </tr>
              <tr>
                <td class="w-25"><label for="a23">&nbsp;&nbsp;Tas Batik</label></td>
                <td class="w-25 text-end">:&nbsp;&nbsp;</td>
                <td><input class="form-control" type="number" name="a23" id="a23" value="<?= $matrikDefaultA[1][2];?>" step='0.1' required></td>
              </tr>
            </table>
          </fieldset>
          <hr class="border-dark">
          <fieldset>
            <legend class="fs-6 text-success fw-bold">Waktu Pengerjaan (minggu)</legend>
            <table class="w-100">
              <tr>
                <td class="w-25"><label for="a31">&nbsp;&nbsp;Selendang Batik</label></td>
                <td class="w-25 text-end">:&nbsp;&nbsp;</td>
                <td><input class="form-control" type="number" name="a31" id="a31" value="<?= $matrikDefaultA[2][0];?>" step='0.1' required></td>
              </tr>
              <tr>
                <td class="w-25"><label for="a32">&nbsp;&nbsp;Baju Batik</label></td>
                <td class="w-25 text-end">:&nbsp;&nbsp;</td>
                <td><input class="form-control" type="number" name="a32" id="a32" value="<?= $matrikDefaultA[2][1];?>" step='0.1' required></td>
              </tr>
              <tr>
                <td class="w-25"><label for="a33">&nbsp;&nbsp;Tas Batik</label></td>
                <td class="w-25 text-end">:&nbsp;&nbsp;</td>
                <td><input class="form-control" type="number" name="a33" id="a33" value="<?= $matrikDefaultA[2][2];?>" step='0.1' required></td>
              </tr>
            </table>
          </fieldset>
          <hr class="border-dark">
          <fieldset>
            <legend class="fs-6 text-success fw-bold">Persediaan</legend>
            <table class="w-100">
              <tr>
                <td class="w-25"><label for="b1">&nbsp;&nbsp;Ukuran Kain (m<sup>2</sup>)</label></td>
                <td class="w-25 text-end">:&nbsp;&nbsp;</td>
                <td><input class="form-control" type="number" name="b1" id="b1" value="<?= $matrikDefaultB[0];?>" step='0.1' required></td>
              </tr>
              <tr>
                <td class="w-25"><label for="b2">&nbsp;&nbsp;Biaya Pewarnaan (Rp)</label></td>
                <td class="w-25 text-end">:&nbsp;&nbsp;</td>
                <td><input class="form-control" type="number" name="b2" id="b2" value="<?= $matrikDefaultB[1];?>" step='0.1' required></td>
              </tr>
              <tr>
                <td class="w-25"><label for="b3">&nbsp;&nbsp;Waktu Pengerjaan (minggu)</label></td>
                <td class="w-25 text-end">:&nbsp;&nbsp;</td>
                <td><input class="form-control" type="number" name="b3" id="b3" value="<?= $matrikDefaultB[2];?>" step='0.1' required></td>
              </tr>
            </table>
          </fieldset>
          <hr class="border-dark">
          <input class="btn btn-success fw-bold px-3 py-2" type="submit" value="Hitung">
        <?= form_close(); ?>
        <hr class="border-dark">
      </article>
    </main>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
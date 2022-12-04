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
        <div class="row mt-2">
          <div class="col col-6 col-md-7">
            <table class="fs-5">
              <tr>
                <td>&nbsp;Selendang Batik&nbsp;&nbsp;&nbsp;</td>
                <td>:</td>
                <td class="fs-4">&nbsp;<?= floor($xyz['x']);?> &nbsp;<span style="opacity: 0.65; font-size:0.65em">(<?= round($xyz['x'], 6);?>)</span></td>
              </tr>
              <tr>
                <td>&nbsp;Baju Batik&nbsp;&nbsp;&nbsp;</td>
                <td>:</td>
                <td class="fs-4">&nbsp;<?= floor($xyz['y']);?> &nbsp;<span style="opacity: 0.65; font-size:0.65em">(<?= round($xyz['y'], 6);?>)</td>
              </tr>
              <tr>
                <td>&nbsp;Tas Batik&nbsp;&nbsp;&nbsp;</td>
                <td>:</td>
                <td class="fs-4">&nbsp;<?= floor($xyz['z']);?> &nbsp;<span style="opacity: 0.65; font-size:0.65em">(<?= round($xyz['z'], 6);?>)</td>
              </tr>
            </table>
          </div>
          <div class="col col-md-1"></div>
          <div class="col col-6 col-md-4">
              <canvas class="w-100 h-100" id="myChart"></canvas>
          </div>
        </div>
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
        <?php
          $array = [];
          $arrayCount = 0;
          foreach ($data as $iT => $tabelEliminasi) {
            if ($iT == 0) echo "<h3 class='fs-6 text-success fw-bold mt-4'>Tabel data pra-eliminasi</h3>";
            else echo "<h3 class='fs-6 text-success fw-bold mt-4'>Tabel elimasi ke-" . $iT . "</h3>";
            echo "<table class='table w-100'>";
              echo "<thead class='table-success'>";
                echo "<tr>";
                  echo "<th style='width: 29%'></th>";
                  echo "<th style='width: 17%'>Selendang Batik</th>";
                  echo "<th style='width: 17%'>Baju Batik</th>";
                  echo "<th style='width: 17%'>Tas Batik</th>";
                  echo "<th style='width: 20%'>Persediaan</th>";
                echo "</tr>";
              echo "</thead>";
              echo "<tbody>";
              foreach ($tabelEliminasi as $iE => $hasilEliminasi) {
                $bahan = '';
                if ($iE == 0) $bahan = 'Ukuran Kain (m<sup>2</sup>)';
                else if ($iE == 1) $bahan = 'Biaya Pewarnaan (Rp)';
                else if ($iE == 2) $bahan = 'Waktu Pengerjaan (minggu)';
                echo "<tr>";
                  echo "<th style='width: 29%'>" . $bahan . "</th>";
                  if ($iT == 9) {
                  echo "<td style='width: 17%'>" . round($hasilEliminasi[0], 6) . "</td>";
                  echo "<td style='width: 17%'>" . round($hasilEliminasi[1], 6) . "</td>";
                  echo "<td style='width: 17%'>" . round($hasilEliminasi[2], 6) . "</td>";
                  $array[$arrayCount] = floor($hasilEliminasi[3]);
                  $arrayCount++;
                  echo "<td class='fw-bold " . ($hasilEliminasi[3] > 0 ? 'text-success' : 'text-danger') . "' style='width: 20%'>" . round($hasilEliminasi[3], 6) . "</td>";
                  } else {
                  echo "<td style='width: 17%'>" . round($hasilEliminasi[0], 6) . "</td>";
                  echo "<td style='width: 17%'>" . round($hasilEliminasi[1], 6) . "</td>";
                  echo "<td style='width: 17%'>" . round($hasilEliminasi[2], 6) . "</td>";
                  echo "<td style='width: 20%'>" . round($hasilEliminasi[3], 6) . "</td>";}
                echo "</tr>";
              }
              echo "</tbody>";
            echo "</table>";
          }
        ?>
        <hr class="border-dark">
      </article>
    </main>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script>
    const ctx = document.getElementById('myChart');
    new Chart(ctx, {
      type: 'pie',
      data: {
        labels: ['Selendang Batik', 'Baju Batik', 'Tas Batik'],
        datasets: [{
          label: 'Jumlah Produksi',
          data: [<?= $array[0];?>, <?= $array[1];?>, <?= $array[2];?>],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        },
        events: ['click', 'mouseout'],
        rotation: -0.7 * Math.PI
      }
    });
  </script>
</body>
</html>
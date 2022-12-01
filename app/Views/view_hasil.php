<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aplikasi Estimasi Jumlah Produksi UMKM Batik Dinda Hayu Menggunakan Metode Gauss-Jordan</title>
</head>
<body>
  <header>
    <ul role="list">
      <li><a href="<?= base_url('penghitungan-page');?>">Kembali</a></li>
    </ul>
  </header>
  <main>
    <article>
      <h2>Hasil Penghitungan</h2>
      <p>Estimasi produksi yang diperoleh yakni sebagai berikut :</p>
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
      <?= form_open(''); ?>
        <fieldset>
          <legend>Hasil Kalkulasi</legend>
            <table>
              <tr>
                <td><label for="hasilX">Selendang Batik&nbsp;</label></td>
                <td>
                  : &nbsp;<input type="number" name="hasilX" id="hasilX" readonly value="<?= floor($hasil[0]); ?>">
                  <span style="opacity: 0.75; font-size: 0.75em;">&nbsp;( <?= $hasil[0]; ?> )</span>
                </td>
              </tr>
              <tr>
                <td><label for="hasilY">Baju Batik&nbsp;</label></td>
                <td>
                  : &nbsp;<input type="number" name="hasilY" id="hasilY" readonly value="<?= floor($hasil[1]); ?>">
                  <span style="opacity: 0.75; font-size: 0.75em;">&nbsp;( <?= $hasil[1]; ?> )</span>
                </td>
              </tr>
              <tr>
                <td><label for="hasilZ">Tas Batik&nbsp;</label></td>
                <td>
                  : &nbsp;<input type="number" name="hasilZ" id="hasilZ" readonly value="<?= floor($hasil[2]); ?>">
                  <span style="opacity: 0.75; font-size: 0.75em;">&nbsp;( <?= $hasil[2]; ?> )</span>
                </td>
              </tr>
            </table>
        </fieldset>
      <?= form_close(); ?>
    </article>
  </main>
</body>
</html>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aplikasi Estimasi Jumlah Produksi UMKM Batik Dinda Hayu Menggunakan Metode Gauss-Jordan</title>
</head>
<body>
  <aside>
    <ul role="list">
      <li><a href="<?= base_url('beranda-page');?>">Beranda</a></li>
      <li><a href="<?= base_url('penghitungan-page');?>">Penghitungan</a></li>
      <li><a href="<?= base_url('akun-page');?>">Akun</a></li>
      <li><a href="<?= base_url('logout');?>">Logout</a></li>
    </ul>
  </aside>
  <main>
    <h2>Penghitungan</h2>
    <p>Masukkan data bahan dan persediaan yang dibutuhkan.</p>
    <?= form_open(base_url('hitung')); ?>
      <fieldset>
        <legend>Ukuran Kain (m<sup>2</sup>)</legend>
        <table>
          <tr>
            <td><label for="a11">Selendang Batik&nbsp;</label></td>
            <td>: &nbsp;<input type="number" name="a11" id="a11" value="<?= $matrikDefaultA[0][0];?>" required></td>
          </tr>
          <tr>
            <td><label for="a12">Baju Batik&nbsp;</label></td>
            <td>: &nbsp;<input type="number" name="a12" id="a12" value="<?= $matrikDefaultA[0][1];?>" required></td>
          </tr>
          <tr>
            <td><label for="a13">Tas Batik&nbsp;</label></td>
            <td>: &nbsp;<input type="number" name="a13" id="a13" value="<?= $matrikDefaultA[0][2];?>" required></td>
          </tr>
        </table>
      </fieldset>
      <fieldset>
        <legend>Biaya Pewarnaan (Rp.)</legend>
        <table>
          <tr>
            <td><label for="a21">Selendang Batik&nbsp;</label></td>
            <td>: &nbsp;<input type="number" name="a21" id="a21" value="<?= $matrikDefaultA[1][0];?>" required></td>
          </tr>
          <tr>
            <td><label for="a22">Baju Batik&nbsp;</label></td>
            <td>: &nbsp;<input type="number" name="a22" id="a22" value="<?= $matrikDefaultA[1][1];?>" required></td>
          </tr>
          <tr>
            <td><label for="a23">Tas Batik&nbsp;</label></td>
            <td>: &nbsp;<input type="number" name="a23" id="a23" value="<?= $matrikDefaultA[1][2];?>" required></td>
          </tr>
        </table>
      </fieldset>
      <fieldset>
        <legend>Waktu Pengerjaan (minggu)</legend>
        <table>
          <tr>
            <td><label for="a31">Selendang Batik&nbsp;</label></td>
            <td>: &nbsp;<input type="number" name="a31" id="a31" value="<?= $matrikDefaultA[2][0];?>" required></td>
          </tr>
          <tr>
            <td><label for="a32">Baju Batik&nbsp;</label></td>
            <td>: &nbsp;<input type="number" name="a32" id="a32" value="<?= $matrikDefaultA[2][1];?>" required></td>
          </tr>
          <tr>
            <td><label for="a33">Tas Batik&nbsp;</label></td>
            <td>: &nbsp;<input type="number" name="a33" id="a33" value="<?= $matrikDefaultA[2][2];?>" required></td>
          </tr>
        </table>
      </fieldset>
      <fieldset>
        <legend>Persediaan</legend>
        <table>
          <tr>
            <td><label for="b1">Ukuran Kain (m<sup>2</sup>)&nbsp;</label></td>
            <td>: &nbsp;<input type="number" name="b1" id="b1" value="<?= $matrikDefaultB[0];?>" required></td>
          </tr>
          <tr>
            <td><label for="b2">Biaya Pewarnaan (Rp.)&nbsp;</label></td>
            <td>: &nbsp;<input type="number" name="b2" id="b2" value="<?= $matrikDefaultB[1];?>" required></td>
          </tr>
          <tr>
            <td><label for="b3">Waktu Pengerjaan (minggu)&nbsp;</label></td>
            <td>: &nbsp;<input type="number" name="b3" id="b3" value="<?= $matrikDefaultB[2];?>" required></td>
          </tr>
        </table>
      </fieldset>
      <fieldset>
        <legend>Kalkulasi</legend>
        <input type="submit" value="Hitung">
      </fieldset>
    <?= form_close(); ?>
  </main>
</body>
</html>
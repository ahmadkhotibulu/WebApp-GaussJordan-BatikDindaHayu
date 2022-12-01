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
    <h2>Akun</h2>
    <p>Perbarui data akun anda di sini.</p>
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

    <?= form_open(base_url('ubah-akun')); ?>
      <label for="nama_lengkap">Nama Lengkap</label>
      <input type="text" name="nama_lengkap" id="nama_lengkap" value="<?= $session->get('namaLengkap');?>" required>
      <label for="password">Password Saat Ini</label>
      <input type="password" name="password" id="password" required>
      <label for="password_baru">Password Baru (Opsional)</label>
      <input type="password" name="password_baru" id="password_baru">
      <label for="password_ulang">Ulangi Password Baru (Opsional)</label>
      <input type="password" name="password_ulang" id="password_ulang">
      <input type="submit" value="Ubah">
    <?= form_close(); ?>
  </main>
</body>
</html>
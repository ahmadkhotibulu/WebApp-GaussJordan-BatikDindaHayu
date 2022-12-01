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
      <li><a href="<?= base_url('petunjuk-page');?>">Petunjuk Penggunaan</a></li>
      <li><a href="<?= base_url('pengembang-page');?>">Pengembang</a></li>
    </ul>
  </header>
  <main>
    <article>
      <h1>Aplikasi Estimasi Jumlah Produksi UMKM Batik Dinda Hayu Menggunakan Metode Gauss-Jordan</h1>
      <h2>Selamat Datang</h2>
      <p>Masukkan data diri anda untuk masuk ke aplikasi.</p>
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
      <?php echo form_open(base_url('login'));?>
        <label for="username">Username</label>
        <input type="text" name="username" id="username" pattern="^(?=.{3,24}$)(?![_.])(?!.*[_.]{2})[a-zA-Z0-9._]+(?<![_.])$" required>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>
        <input type="submit" value="Login">
      <?php echo form_close();?>
      <p>Belum memiliki akun? <a href="<?= base_url('register-page');?>">Register</a> di sini.</p>
    </article>
  </main>
</body>
</html>
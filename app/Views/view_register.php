<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aplikasi Estimasi Jumlah Produksi UMKM Batik Dinda Hayu Menggunakan Metode Gauss-Jordan</title>
  <!-- Styles Tailwind CSS -->
  <link rel="stylesheet" href="<?= base_url('css/app.css') ?>" />
</head>

<body>
  <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
    <div class="mx-auto max-w-lg">
      <h1 class="uppercase text-center text-2xl font-bold text-primary sm:text-2xl">
        Aplikasi Estimasi Jumlah Produksi UMKM Batik Dinda Hayu Menggunakan Metode Gauss-Jordan
      </h1>
      <div class="container mx-auto">
        <div class="flex">
          <div class="w-3/12">
            <ul class="flex space-x-3 py-4 px-6 gap-80" role="list">
              <li><a class="mx-auto text-yellow-600 text-sm text-opacity-60 font-semibold" href="<?= base_url('petunjuk-page'); ?>">Petunjuk Penggunaan</a></li>
              <li><a class="mx-auto text-primary text-sm text-opacity-60 font-semibold" href="<?= base_url('pengembang-page'); ?>">Pengembang</a></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="mt-6 mb-0 space-y-4 rounded-lg p-8 shadow-2xl">
        <h2 class="font-bold text-2xl text-primary">Halaman Registrasi</h2>
        <p class="text-lg text-mint-400 font-medium">Masukkan data diri, lalu klik Daftar untuk mendaftar akun baru.</p>

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

        <?= form_open(base_url('register')); ?>
        <div>
          <label for="username" class="text-sm font-medium">Username</label>
          <div class="relative mt-1">
            <input type="text" id="username" name="username" class="w-full rounded-lg border-mint-200 p-4 pr-12 text-sm shadow-md" placeholder="Masukan email Anda" pattern="^(?=.{3,24}$)(?![_.])(?!.*[_.]{2})[a-zA-Z0-9._]+(?<![_.])$" required />
            <span class="absolute inset-y-0 right-4 inline-flex items-center">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-mint-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
              </svg>
            </span>
          </div>
        </div>

        <div>
          <label for="nama-lengkap" class="text-sm font-medium">Nama Lengkap</label>
          <div class="relative mt-1">
            <input type="text" id="nama_lengkap" name="nama_lengkap" class="w-full rounded-lg border-mint-200 p-4 pr-12 text-sm shadow-md" placeholder="Masukan nama lengkap Anda" required />
            <span class="absolute inset-y-0 right-4 inline-flex items-center">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-mint-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
              </svg>
            </span>
          </div>
        </div>

        <div>
          <label for="password" class="text-sm font-medium">Kata Sandi</label>
          <div class="relative mt-1">
            <input type="password" id="password" name="password" class="w-full rounded-lg border-mint-200 p-4 pr-12 text-sm shadow-md" placeholder="Enter password" />
            <span class="absolute inset-y-0 right-4 inline-flex items-center">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-mint-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
              </svg>
            </span>
          </div>
        </div>

        <div>
          <label for="password_ulang" class="text-sm font-medium">Konfirmasi Kata Sandi</label>
          <div class="relative mt-1">
            <input type="password" id="password_ulang" name="password_ulang" class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-md" placeholder="Masukkan ulang kata sandi" />
            <span class="absolute inset-y-0 right-4 inline-flex items-center">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-mint-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
              </svg>
            </span>
          </div>
        </div>

        <button type="submit" class="block w-full rounded-lg bg-primary px-5 py-3 mt-3 text-sm font-bold text-white">
          Daftar
        </button>

        <p class="mt-3 text-center text-sm text-mint-300">
          Sudah memiliki akun!
          <a class="font-extrabold text-mint-800" href="<?= base_url('login-page'); ?>">Masuk</a>
          di sini.
        </p>
        <?php echo form_close(); ?>
      </div>
    </div>
  </div>
</body>

</html>
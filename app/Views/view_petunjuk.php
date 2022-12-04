<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aplikasi Estimasi Jumlah Produksi UMKM Batik Dinda Hayu Menggunakan Metode Gauss-Jordan</title>
  <!-- Styles Tailwind CSS Start-->
  <link rel="stylesheet" href="<?= base_url('css/app.css'); ?>" />
  <!-- Styles Tailwind CSS End-->
</head>

<body>
  <section>
    <header class="bg-white p-2 sm:px-8 sm:py-6 lg:p-4 xl:px-8 xl:py-6">
      <div class="flex items-center justify-between">
        <a href="<?= base_url('back'); ?>" class="hover:bg-mint-400 group flex items-center rounded-md bg-mint-800 text-white text-sm font-medium pl-2 pr-3 py-2 shadow-sm">
          Kembali
        </a>
      </div>
    </header>

    <div class="p-4">
      <div class="bg-gradient-to-b from-white to-mint-200 p-8 rounded-lg shadow-2xl py-3 mx-auto">
        <h3 class="text-3xl font-bold text-mint-700 tracking-widest text-center uppercase">Petunjuk Penggunaan</h3>
        <ul class="list-decimal text-mint-400 grid grid-cols-1 md:grid-cols-2 gap-4 xl:gap-12 px-2 xl:px-12 mt-6">
          <div class="flex space-x-8 mt-px">
            <div>
              <li>
                <p class="m-8">Pertama, login ke dalam aplikasi menggunakan akun anda.</p>
              </li>
            </div>
          </div>

          <div class="flex space-x-8 mt-px">
            <div>
              <li>
                <p class="m-8">Jika belum memiliki akun, anda dapat mendaftar dengan menekan "Register" pada formulir login.</p>
              </li>
            </div>
          </div>

          <div class="flex space-x-8 mt-px">
            <div>
              <li>
                <p class="m-8">Setelah berhasil login, masuk ke menu "Penghitungan" untuk melihat ataupun memasukkan jumlah bahan dan persediaan yang diperlukan.</p>
              </li>
            </div>
          </div>

          <div class="flex space-x-8 mt-px">
            <div>
              <li>
                <p class="m-8">Jika dirasa jumlah bahan dan persediaan mencukupi, klik tombol "Hitung" untuk memulai penghitungan.</p>
              </li>
            </div>
          </div>

          <div class="flex space-x-8 mt-px">

            <div>
              <li>
                <p class="m-8">Hasil penghitungan akan muncul sesuai dengan penghitungan yang berdasarkan metode eliminasi Gauss-Jordan.</p>
              </li>
            </div>
          </div>

          <div class="flex space-x-8 mt-px">
            <div>
              <li>
                <p class="m-8">Dalam aplikasi ini, anda juga dapat memperbarui akun anda di menu "Akun".</p>
              </li>
            </div>
          </div>
        </ul>
      </div>
    </div>
  </section>
</body>

</html>
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
  <header class="bg-white p-2 sm:px-8 sm:py-6 lg:p-4 xl:px-8 xl:py-6">
    <div class="flex items-center justify-between">
      <a href="<?= base_url('back'); ?>" class="text-white hover:bg-mint-400 group flex items-center rounded-md bg-mint-800 text-white-50 text-sm font-medium pl-2 pr-3 py-2 shadow-sm">
        Kembali
      </a>
    </div>
  </header>

  <div class="h-screen w-full bg-gradient-to-b from-white to-mint-200">
    <div class="max-w-screen-lg mx-auto flex flex-col items-center justify-center h-full px-4 md:flex-row">
      <div class="flex flex-col justify-center h-full">
        <h3 class="text-3xl sm:text-6xl px-4 font-bold text-primary">Pengembang</h3>
        <p class="text-mint-500 px-4 py-4 max-w-md">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores harum quasi amet similique molestias totam cupiditate libero dicta non eius.</p>
      </div>
      <div class="relative overflow-hidden bg-no-repeat bg-cover">
        <img class="rounded-2xl hover:rounded-2xl mx-auto md:w-full hover:scale-110 transition duration-500 ease-in-out" src="<?= base_url('assets/images/dokumentasi.jpeg'); ?>" alt="Dokumentasi">
      </div>
    </div>
  </div>




  <div class="group grid lg:grid-cols-3">
    <div class="m-2 bg-white rounded-lg shadow-xl lg:flex lg:max-w-lg">
      <img src="<?= base_url('assets/images/hilarius-nahak.jpeg'); ?>" class="w-1/1 lg:w-1/2 rounded-l-2xl blur-sm hover:blur-none transition duration-400">
      <div class="p-6 bg-gray-50">
        <h2 class="mb-2 text-2xl font-bold text-primary">Ahmad Khotibul Umam</h2>
        <span class="text-mint-400">
          NIM. 20330047
        </span>
      </div>
    </div>
    <div class="m-2 bg-white rounded-lg shadow-xl lg:flex lg:max-w-lg">
      <img src="<?= base_url('assets/images/hilarius-nahak.jpeg'); ?>" class="w-1/1 lg:w-1/2 rounded-l-2xl blur-sm hover:blur-none transition duration-400">
      <div class="p-6 bg-gray-50">
        <h2 class="mb-2 text-2xl font-bold text-primary">Ahmad Fahrizzal Naim</h2>
        <span class="text-mint-400">
          NIM. 20330053
        </span>
      </div>
    </div>
    <div class="m-2 bg-white rounded-lg shadow-xl lg:flex lg:max-w-lg">
      <img src="<?= base_url('assets/images/hilarius-nahak.jpeg'); ?>" class="w-1/1 lg:w-1/2 rounded-l-2xl blur-sm hover:blur-none transition duration-400">
      <div class="p-6 bg-gray-50">
        <h2 class="mb-2 text-2xl font-bold text-primary">Hilarius Nahak</h2>
        <span class="text-mint-400">
          NIM. 20330048
        </span>
      </div>
    </div>
  </div>

  <div class="h-screen w-full bg-gradient-to-t from-white to-mint-200">
    <div class="max-w-screen-lg mx-auto flex flex-col items-center justify-center h-full px-4 md:flex-row">
      <div class="flex flex-col justify-center h-full">
        <h3 class="text-3xl sm:text-6xl px-4 font-bold text-primary">Dosen Pembimbing</h3>
        <p class="text-mint-500 px-4 py-4 max-w-md">Yumarlin MZ., S.Kom., M.Pd., M.Kom.</p>
      </div>
      <div class="relative overflow-hidden bg-no-repeat bg-cover">
        <img class="rounded-2xl hover:rounded-2xl mx-auto md:w-full hover:scale-110 transition duration-500 ease-in-out" src="<?= base_url('assets/images/dosenpembimbing-yumarlinmz.png'); ?>" alt="Dosen Pembimbing">
      </div>
    </div>
  </div>
</body>

</html>
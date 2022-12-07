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

  <!-- Hero Sctionn Start -->
  <section id="home" class="pt-36">
    <div class="container">
      <div class="flex flex-wrap">
        <div class="w-full self-center px-4 lg:w-1/2">
          <h1 class="text-base font-semibold text-primary md:text-xl">
            <span class="block font-bold text-dark text-4xl mt-1 lg:text-5xl">
              Yumarlin MZ, S.Kom., M.Pd., M.Kom
            </span>
          </h1>
          <h2 class="font-medium text-slate-500 text-lg mb-5 lg:text-2xl">
            Dosen Pembimbing |
            <span class="text-dark">Metode Numerik</span>
          </h2>
        </div>
        <div class="w-full self-end px-4 lg:w-1/2">
          <div class="relative mt-10 lg:mt-9 lg:right-0">
            <img src="<?= base_url('assets/images/dosenpembimbing-yumarlinmz.png'); ?>" alt="" class="max-w-full mx-auto" />
            <span class="absolute -bottom-0 -z-10 left-1/2 -translate-x-1/2 md:scale-125">
              <svg with="300" height="300" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                <path fill="#10B981" d="M38.6,-46.9C53.3,-33.8,70.6,-24.6,74.5,-11.8C78.4,1.1,68.8,17.6,58.6,32.4C48.4,47.1,37.5,60,23.2,66.3C9,72.5,-8.5,72,-22.8,65.6C-37.1,59.1,-48.2,46.6,-60.1,31.9C-72,17.1,-84.7,-0.1,-82.3,-14.6C-79.9,-29.2,-62.2,-41.2,-46,-54C-29.7,-66.9,-14.9,-80.6,-1.4,-78.9C12,-77.2,24,-60.1,38.6,-46.9Z" transform="translate(100 100)" />
              </svg>
            </span>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Hero Sctionn End -->

</body>

</html>
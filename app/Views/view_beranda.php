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
    <h2>Hi, <?= session()->get('namaLengkap'); ?></h2>
    <article>
      <h3>Batik Dinda Hayu</h3>
      <img src="<?= base_url('assets/images/batik-dindahayu-rumah.png');?>" alt="Rumah Batik Dinda Hayu">
      <p>
        Home Industry Batik Dinda Hayu memproduksi 3 jenis produk dan olahan batik tulis yakni selendang batik,
        baju batik, dan tas batik. Dalam pembuatan masing-masing jenis produk dibutuhkan 3 buah variabel yakni
        ukuran kain, biaya pewarnaan, dan lama pengerjaan. Berdasarkan hasil observasi wawancara, didapatkan data
        berikut:
      </p>
      <ul>
        <li>Sebuah selendang batik membutuhkan kain berukuran 1.2m<sup>2</sup> dengan biaya pewarnaan Rp 25.000,-
        serta lama pengerjaan 2 minggu,</li>
        <li>Sebuah baju batik membutuhkan kain berukuran 4m<sup>2</sup> dengan biaya pewarnaan Rp 50.000,- serta
        lama pengerjaan 4 minggu, dan</li>
        <li>Sebuah tas batik membutuhkan kain berukuran 1m<sup>2</sup> dengan biaya pewarnaan Rp 35.000,- serta
        lama pengerjaan 4 minggu.</li>
      </ul>
      <div>
        <img src="<?= base_url('assets/images/selendang-batik.png');?>" alt="Selendang Batik">
        <img src="<?= base_url('assets/images/baju-batik.png');?>" alt="Baju Batik">
        <img src="<?= base_url('assets/images/tas-batik.png');?>" alt="Tas Batik">
      </div>
      <p>
        Berdasarkan data hasil observasi, berapa banyak untuk masing-masing jenis produk dan olahan yang dapat
        diproduksi dari Home Industry Batik Dinda Hayu jika disediakan kain berukuran 36m<sup>2</sup>, dana pewarnaan
        sejumlah Rp 700.000,- serta waktu pengerjaan selama 60 minggu?
      </p>
    </article>
  </main>
</body>
</html>
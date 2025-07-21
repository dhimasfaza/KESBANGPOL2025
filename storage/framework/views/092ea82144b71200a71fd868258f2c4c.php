<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark sticky-top">
  <div class="container-fluid px-0">
    <div class="d-flex align-items-center ms-5 ps-5">
      <a class="navbar-brand d-flex align-items-center me-2" href="/" onkeyup="fetchData()">
        <img src="<?php echo e(asset('images/component/logo3.png')); ?>" alt="Logo" class="img-fluid">
        <img src="<?php echo e(asset('images/component/logo1-2.png')); ?>" alt="Logo" class="img-fluid">
      </a>
      <div class="navbar-title text-left fw-bold">
        <div class="ms-1">BADAN KESATUAN BANGSA DAN POLITIK</div>
        <div class="ms-1">KOTA BANDUNG</div>
      </div>
    </div>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div id="navbarNav" class="collapse navbar-collapse justify-content-center">
      <ul class="navbar-nav">

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Beranda</a>
        </li>

        <!-- Profil -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#">Profil</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?php echo e(route('tampilvisimisi')); ?>">Visi Misi</a></li>
            <li><a class="dropdown-item" href="<?php echo e(route('tampiltugasfungsi')); ?>">Tugas dan Fungsi</a></li>
            <li><a class="dropdown-item" href="<?php echo e(route('tampilstruktur')); ?>">Struktur Organisasi</a></li>
            <li class="dropdown-submenu dropend-left">
              <a class="dropdown-item" href="/articles">Artikel &raquo;</a>
              <ul class="submenu dropdown-menu">
                <li><a class="dropdown-item" href="<?php echo e(route('semua-artikel')); ?>">Semua Artikel</a></li>
                <li><a class="dropdown-item" href="<?php echo e(route('semua-artikel', ['bidang_id' => 1])); ?>">Bidang 1 (Ideologi, Wawasan Kebangsaan dan Karakter Bangsa)</a></li>
                <li><a class="dropdown-item" href="<?php echo e(route('semua-artikel', ['bidang_id' => 2])); ?>">Bidang 2 (Politik Dalam Negeri)</a></li>
                <li><a class="dropdown-item" href="<?php echo e(route('semua-artikel', ['bidang_id' => 3])); ?>">Bidang 3 (Ketahanan Ekonomi, Sosial, Budaya, Agama, dan Ormas)</a></li>
                <li><a class="dropdown-item" href="<?php echo e(route('semua-artikel', ['bidang_id' => 4])); ?>">Bidang 4 (Kewaspadaan Nasional dan Penanganan Konflik)</a></li>
              </ul>
            </li>
            <li><a class="dropdown-item" href="<?php echo e(route('tampildasarhukum')); ?>">Landasan Hukum</a></li>
            <li><a class="dropdown-item" href="<?php echo e(route('tampilprogram')); ?>">Program dan Kegiatan</a></li>
            <li><a class="dropdown-item" href="<?php echo e(route('tampilsejarah')); ?>">Sejarah</a></li>
          </ul>
        </li>

        <!-- Sakib -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#">SAKIP</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?php echo e(route('tampiliku')); ?>">Indikator Kinerja Utama</a></li>
            <li><a class="dropdown-item" href="<?php echo e(route('tampilrenja')); ?>">RENJA</a></li>
            <li><a class="dropdown-item" href="<?php echo e(route('tampilrenstra')); ?>">RENSTRA</a></li>
            <li><a class="dropdown-item" href="<?php echo e(route('tampilukurkerja')); ?>">Pengukuran Kerja</a></li>
            <li><a class="dropdown-item" href="<?php echo e(route('tampillakip')); ?>">Laporan AKIP</a></li>
          </ul>
        </li>

        <!-- Mitra -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#">Mitra</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">FORKOPIMDA</a></li>
            <li><a class="dropdown-item" href="#">KPU</a></li>
            <li><a class="dropdown-item" href="#">BAWASLU</a></li>
            <li><a class="dropdown-item" href="#">BNN</a></li>
            <li><a class="dropdown-item" href="#">Partai Politik</a></li>
            <li><a class="dropdown-item" href="#">FKDM</a></li>
            <li><a class="dropdown-item" href="#">FKUB</a></li>
            <li><a class="dropdown-item" href="#">FPK</a></li>
          </ul>
        </li>

        <!-- Pelayanan -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#">Pelayanan</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?php echo e(route('maintenance')); ?>">Pendaftaran Ormas</a></li>
            <li><a class="dropdown-item" href="https://layanan.bandung.go.id">Simpel Sakti</a></li>
          </ul>
        </li>

        <!-- Informasi -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#">Informasi</a>
          <ul class="dropdown-menu">

            <!-- ✅ Tambahan Menu Pemilu Raya -->
            <li class="dropdown-submenu dropend-left">
              <a class="dropdown-item" href="#">Pemilu Raya &raquo;</a>
              <ul class="submenu dropdown-menu">
                <li><a class="dropdown-item" href="<?php echo e(route('pemilu.show', 'pilpres')); ?>">Pemilihan Presiden</a></li>
                <li><a class="dropdown-item" href="<?php echo e(route('pemilu.show', 'kepala-daerah')); ?>">Pemilihan Kepala Daerah</a></li>
                <li><a class="dropdown-item" href="<?php echo e(route('pemilu.show', 'legislatif')); ?>">Pemilihan Legislatif</a></li>
              </ul>
            </li>

            <!-- Yang sudah ada -->
            <li><a class="dropdown-item" href="<?php echo e(route('tampil-data-ormas')); ?>">Data Ormas</a></li>
            <li class="dropdown-submenu dropend-left">
              <a class="dropdown-item" href="#">Data Statistik &raquo;</a>
              <ul class="submenu dropdown-menu">
                <li><a class="dropdown-item" href="<?php echo e(route('tampil-jumlah-potensi-konflik')); ?>">Jumlah Potensi Konflik Kota Bandung</a></li>
              </ul>
            </li>

          </ul>
        </li>

      </ul>
    </div>
  </div>
</nav>
<?php /**PATH C:\Users\Dhimas Faza\Documents\Kuliah\Semester 6\MAGANG\WEBSITE-KESBANGPOL\KESBANGPOL2025\resources\views/landingpage/shared/header.blade.php ENDPATH**/ ?>
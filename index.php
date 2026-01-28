<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Website pendaftaran peserta didik baru secara online SMAN 1 TAKENGON">
  <meta name="author" content="Razak Rafsanjani">
  <title>SMA NEGERI 1 TAKENGON</title>
  <!-- Bootstrap core CSS -->
  <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
  <!-- Favicons -->
  <link rel="apple-touch-icon" href="assets/img/logosekolah.png" sizes="180x180">
  <link rel="icon" href="assets/img/logosekolah.png" sizes="32x32" type="image/png">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }
    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
    .nav-link {
      padding-left: 30px !important;
    }

    /* HERO SECTION dengan background image yang memenuhi layar */
    .hero {
      position: relative;
      width: 100%;
      height: 400px; /* Sesuaikan tinggi sesuai kebutuhan */
      background: url('assets/img/latar_belakang.png') no-repeat center center;
      background-size: cover; /* Memastikan gambar memenuhi seluruh area */
      background-position: center;
      background-repeat: no-repeat;
      margin-top: 70px; /* Agar tidak tertutup oleh navbar */
    }  
    /* Overlay untuk meningkatkan kontras teks */
    .hero-overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.3);
    }
    /* Teks di atas background */
    .hero-content {
      position: relative;
      z-index: 2;
      height: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      color: #fff;
    }
    .hero-content h1 {
      font-size: 2.5rem;
      font-weight: bold;
      margin: 0;
    }
    .hero-content p {
      font-size: 1.25rem;
      margin: 10px 0 0;
    }
    .syarat-judul {
      margin-top: 40px; /* Atur jarak lebih jauh */
    }
    body {
      color: #333; /* Warna abu tua untuk meningkatkan keterbacaan */
    }
/* Jika ada elemen spesifik yang terlihat abu-abu */
    .kontak-kami, .peta-lokasi, .alamat-sekolah {
      color: #222 !important; /* Paksa warna lebih gelap */
    }
/* Jika teks tetap pucat karena opacity atau efek lain */
    .transparent-text {
      opacity: 1 !important;
      filter: brightness(1.2); /* Tingkatkan kecerahan teks */
    }
    .copyright {
     opacity: 1 !important;  /* Menghapus efek transparan jika ada */
     filter: brightness(1.2); /* Menambah sedikit kecerahan */
    }
    .footer-container {
    background-color: black; /* Warna hitam polos */
    color: white; /* Warna teks agar kontras */
    display: flex;
    justify-content: space-between;
    padding: 20px;
    }
.footer-content {
    flex: 1;
    text-align: center;
}

.footer-content iframe {
    width: 100%;
    height: 200px;
    border: none;
}


  </style>
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light shadow" style="background: blue !important; height: 70px;"> 
      <div class="container">
        <a class="navbar-brand" href="#"><b>SMAN 1 TAKENGON</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" 
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav ml-auto">
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav ml-auto">
                <a class="btn btn-success rounded-pill" href="/pendaftaran/login.php">MASUK</a>
                <a class="btn btn-danger rounded-pill" href="/pendaftaran/registrasi.php">DAFTAR</a>
              </div>
            </div>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <!-- HERO SECTION -->
  <section class="hero">
    <div class="hero-overlay"></div>
    <div class="hero-content">
      <div>
        <h1>PENDAFTARAN ONLINE</h1>
        <p>SMA NEGERI 1 TAKENGON</p>
        <p>Untuk calon pendaftar tahun ajaran 2025/2026 bisa mendaftar melalui website ini atau langsung datang ke tempat pendaftaran</p>
      </div>
    </div>
  </section>

  <main role="main" style="position: relative">
    <div class="container mt-5">
      <div class="row pt-5">
        <div class="col-md-7">
        </div>
      </div>

      <div class="lead" style="color: #222; font-weight: normal;">
        <div class="text-center">
          <h3>
            KENAPA PILIH <br />
            SMAN 1 TAKENGON ?
          </h3>
        </div>
        <div class="row mt-5 d-flex justify-content-center">
          <!-- Kolom 1 -->
          <div class="col-lg-3 text-center">
            <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveaspectratio="xMidYMid slice" focusable="false" role="img" aria-label="Tentang Sekolah">
              <title>Tentang Sekolah</title>
              <rect width="100%" height="100%" fill="#777"/>
              <text x="50%" y="50%" fill="#fff" dy=".3em">140x140</text>
            </svg>
            <h2>Tentang Sekolah</h2>
            <a class="btn btn-secondary" href="https://id.wikipedia.org/wiki/SMA_Negeri_1_Takengon" role="button">Klik Disini &raquo;</a>
          </div>
          <!-- Kolom 2 -->
          <div class="col-lg-3 text-center">
            <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveaspectratio="xMidYMid slice" focusable="false" role="img" aria-label="Tentang Sekolah">
              <title>Tentang Sekolah</title>
              <rect width="100%" height="100%" fill="#777"/>
              <text x="50%" y="50%" fill="#fff" dy=".3em">140x140</text>
            </svg>
            <h2>Tentang Sekolah</h2>
            <a class="btn btn-secondary" href="https://id.wikipedia.org/wiki/SMA_Negeri_1_Takengon" role="button">Klik Disini &raquo;</a>
          </div>
          <!-- Kolom 3 -->
          <div class="col-lg-3 text-center">
            <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveaspectratio="xMidYMid slice" focusable="false" role="img" aria-label="Tentang Sekolah">
              <title>Tentang Sekolah</title>
              <rect width="100%" height="100%" fill="#777"/>
              <text x="50%" y="50%" fill="#fff" dy=".3em">140x140</text>
            </svg>
            <h2>Tentang Sekolah</h2>
            <a class="btn btn-secondary" href="https://id.wikipedia.org/wiki/SMA_Negeri_1_Takengon" role="button">Klik Disini &raquo;</a>
          </div>
          <!-- Kolom 4 -->
          <div class="col-lg-3 text-center">
            <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveaspectratio="xMidYMid slice" focusable="false" role="img" aria-label="Tentang Sekolah">
              <title>tes</title>
              <rect width="100%" height="100%" fill="#777"/>
              <text x="50%" y="50%" fill="#fff" dy=".3em">140x140</text>
            </svg>
            <h2>Tentang Sekolah</h2>
            <a class="btn btn-secondary" href="https://id.wikipedia.org/wiki/SMA_Negeri_1_Takengon" role="button">Klik Disini &raquo;</a>
          </div>
        </div>
      </div>

      <!-- START THE FEATURETTES -->
      <hr class="featurette-divider">
      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading syarat-judul" style="color: #222; font-weight: normal;">Syarat Pendaftaran</h2>
           <p class="lead syarat-pendaftaran" style="color: #222; font-weight: normal;">
             1. Menyiapkan pas photo ukuran 3 x 4 cm dengan latar biru. (Pas foto tidak usah dicetak, cukup disiapkan file Jpeg-nya saja).<br>
             2. Mengisi form pendaftaran.<br>
             3. Screenshot NISN (Screenshot NISN dapat dilakukan di website <a href="https://referensi.data.kemdikbud.go.id/nisn/">https://referensi.data.kemdikbud.go.id/nisn/</a>).<br>
             4. Scan nilai raport dari semester I s/d V format Jpeg max 1 Mb.<br>
             5. Scan Sertifikat Prestasi (Jika ada) format Pdf max 3 sertifikat saja.<br>
             6. Scan Kartu Keluarga (KK) format Jpeg max 1 Mb.<br>
             7. Siapkan email aktif untuk mencetak blanko formulir pendaftaran (sebelumnya data diisi terlebih dahulu dengan benar).
            </p>

        </div>
        <div class="col-md-5 order-md-1">
          <div class="featurette-image-container position-relative">
            <img src="assets/img/gambar_pendaftaran.png" class="bd-placeholder-img bd-placeholder-img-lg img-fluid mx-auto" width="400" height="400">
          <div class="position-absolute top-50 start-50 translate-middle text-center" style="color: #aaa;">
    </div>
  </div>
</div>

      </div>
      <!-- /END THE FEATURETTES -->
    </div>
    <!-- /.container -->

    <!-- FOOTER -->
<footer style="background-color: black; color: white; margin-top: 20px;">
  <div class="container py-3" style="background-color: black;">
    <div class="row">
      <div class="col-md-4">
        <img src="assets/img/logosekolah.png" alt="logo" height="70px" class="mb-3">
        <h3>SMAN 1 TAKENGON</h3>
        <ul>
          <li>
            <i>
              <svg
                width="1em"
                height="1em"
                viewBox="0 0 16 16"
                class="bi bi-geo"
                fill="currentColor"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path d="M11 4a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                <path d="M7.5 4h1v9a.5.5 0 0 1-1 0V4z" />
                <path
                  fill-rule="evenodd"
                  d="M6.489 12.095a.5.5 0 0 1-.383.594c-.565.123-1.003.292-1.286.472-.302.192-.32.321-.32.339 0 .013.005.085.146.21.14.124.372.26.701.382.655.246 1.593.408 2.653.408s1.998-.162 2.653-.408c.329-.123.56-.258.701-.382.14-.125.146-.197.146-.21 0-.018-.018-.147-.32-.339-.283-.18-.721-.35-1.286-.472a.5.5 0 1 1 .212-.977c.63.137 1.193.34 1.61.606.4.253.784.645.784 1.182 0 .402-.219.724-.483.958-.264.235-.618.423-1.013.57-.793.298-1.855.472-3.004.472s-2.21-.174-3.004-.471c-.395-.148-.749-.336-1.013-.571-.264-.234-.483-.556-.483-.958 0-.537.384-.929.783-1.182.418-.266.98-.47 1.611-.606a.5.5 0 0 1 .595.383z"
                />
              </svg>
            </i>
            Jl. Lebe Kader no.13 Takengon kec. Bebesen kab. Aceh Tengah
          </li>
          <li>
            <i>
              <svg
                width="1em"
                height="1em"
                viewBox="0 0 16 16"
                class="bi bi-telephone-fill"
                fill="currentColor"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  d="M2.267.98a1.636 1.636 0 0 1 2.448.152l1.681 2.162c.309.396.418.913.296 1.4l-.513 2.053a.636.636 0 0 0 .167.604L8.65 9.654a.636.636 0 0 0 .604.167l2.052-.513a1.636 1.636 0 0 1 1.401.296l2.162 1.681c.777.604.849 1.753.153 2.448l-.97.97c-.693.693-1.73.998-2.697.658a17.47 17.47 0 0 1-6.571-4.144A17.47 17.47 0 0 1 .639 4.646c-.34-.967-.035-2.004.658-2.698l.97-.969z"
                />
              </svg>
            </i>
             21550
          </li>
          <li>
            <i>
              <svg
                width="1em"
                height="1em"
                viewBox="0 0 16 16"
                class="bi bi-envelope-fill"
                fill="currentColor"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"
                />
              </svg>
            </i>
             sman1takengon1959@gmail.com
          </li>
        </ul>
      </div>
      <div class="col-md-3 offset-md-1">
        <h3>Kontak Kami</h3>
        <p>
          Razak Rafsanjani : 081285631129
        </p>
      </div>
      <div class="col-md-3 offset-md-1">
        <h3>Peta Lokasi</h3>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.839686327231!2d96.8468096!3d4.622675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3038edb60d15dc53%3A0xf5431cd4329d07b6!2sSMA%20Negeri%201%20Takengon!5e0!3m2!1sid!2sid!4v1738635490432!5m2!1sid!2sid"height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </div>

  <div class="text-center py-2" style="background-color: black;">
    <div class="container">
      <p class="copyright">
        Copyright @2025 SMAN 1 TAKENGON
      </p>
    </div>
  </div>
</footer>


  <!-- Bootstrap JS (pastikan file JS ada pada folder assets/js/) -->
  <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>

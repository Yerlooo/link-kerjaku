<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->

    <title>Link-Kerjaku | Home Pelamar</title>
    <link
            href=" https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css "
            rel="stylesheet"
        />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
            crossorigin="anonymous"
        />
        <script src=" https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js "></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
            crossorigin="anonymous"
        ></script>
        <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-auto-scroll@0.5.3/dist/js/splide-extension-auto-scroll.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
    <style>
       .dropdown-menu {
    position: absolute;
    top: 60px;
    right: 20px;
    background-color: white;
    border: 1px solid #ccc;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    width: 230px;
    z-index: 1000;
    opacity: 0;
    visibility: hidden;
    transform: translateY(-10px);
    transition: opacity 0.3s ease, transform 0.3s ease;
}

.dropdown-menu.show {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
}

.dropdown-content {
    padding: 10px;
}

.dropdown-header {
    display: flex;
    align-items: center;
    padding: 10px;
    background-image: url('img/pelamar.jpg'); /* Path to your background image */
    background-size: cover;
    background-position: center;
    border-radius: 8px 8px 0 0; /* Optional: rounding top corners */
}

.dropdown-profile-img {
    width: 30px;
    height: 30px;
    border-radius: 50%;
    margin-right: 10px;
}


.dropdown-item {
    display: flex;
    align-items: center;
    padding: 10px;
    cursor: pointer;
}

.dropdown-item:hover {
    background-color: #f0f0f0;
}

.dropdown-icon {
    margin-right: 10px;
    width: 16px;
    height: 16px;
}

.dropdown-divider {
    height: 1px;
    background-color: #ccc;
    margin: 5px 0;
}

.carousel {
      position: relative;
    }

    .carousel-item {
      scroll-snap-align: start;
      flex: none;
      width: 100%;
    }

    .card-slider {
      width: 80%;
      margin: 0 auto;
    }
    .slide {
      padding: 15px;
    }
    

    </style>

  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
    <a class="navbar-brand" href="#">
        <img src="img/logo2.png" alt="Logo" style="height: 40px;">
    </a>         
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active ms-4" aria-current="page" href="/HomePagePelamar" style="color: blue;">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active ms-4" aria-current="page" href="/lowongankerja" style="color: #000000;">Lowongan Kerja</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active ms-4" aria-current="page" href="/about2" style="color: #000000;">Tentang Kami</a>
                </li>
            </ul>

            <div class="d-flex align-items-center">
    <a href="/ProfillPelamar" class="btn-btn d-flex align-items-center justify-content-center" role="button" style="width: 40px; height: 40px; border-radius: 50%; margin-left: 10px; margin-right: 10px;" title="Olivia Rhye">
        <img src="img/ProfilPelamar.jpg" alt="Profile Image" style="width: 45px; height: 45px; border-radius: 50%;">
    </a>
    <span style="margin-left: 10px;">Stevano Gian</span>
    <div id="dropdownIcon" class="arrow-icon" style="margin-left: 10px; width: 26px; height: 26px; border: 2px solid #FFC94A; border-radius: 50%; display: flex; align-items: center; justify-content: center; cursor: pointer;">
        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
            <path d="M6 9l6 6 6-6"></path>
        </svg>
    </div>
</div>

<div id="dropdownMenu" class="dropdown-menu">
    <div class="dropdown-content">
    <div class="dropdown-header" style="background-image: url('img/pelamar.jpg'); background-size: cover; background-position: center;">
    <img src="img/ProfilPelamar.jpg" alt="Profile Image" class="dropdown-profile-img">
    <span>stevanogian@gmail.com</span>
</div>

        <div class="dropdown-divider"></div>
        <div class="dropdown-item" onclick="window.location.href='/ProfillPelamar';">
    <img src="svg/edit.svg" alt="Edit Icon" class="dropdown-icon">
    Edit Profil
</div>

<div class="dropdown-divider"></div>
<div class="dropdown-item" onclick="confirmLogout()">
    <img src="svg/logout.svg" alt="Logout Icon" class="dropdown-icon">
    Logout
</div>

    </div>
</div>
        </div>
    </div>
</nav>

<!-- Section Pertama -->
<section style="background-color: #146D9A; padding: 50px; display: flex; align-items: center; justify-content: center;">
    <div style="margin-right: 10px;">
<h3><span style="color: #FFC94A;">JELAJAHI KARIER,</span> <span style="color: white;">DAN</span> <span style="color: #FFC94A;">WUJUDKAN IMPIAN</span></h3>
<h3 style="color: white;">ANDA BERSAMA KAMI</h3>
        <p style="color: white;">Cari, Temukan, dan Raih Kesempatan Terbaik!</p>
        <form class="row g-15 mx-auto">
            <div class="col-md-5">
                <input type="text" class="form-control" id="position" placeholder="Posisi Pekerjaan">
            </div>
            <div class="col-md-5">
    <select class="form-select" id="location">
        <option selected>Kota/Provinsi</option>
        <option value="1">Kota A</option>
        <option value="2">Kota B</option>
        <option value="3">Kota C</option>
    </select>
</div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-secondary" style="color: black; background-color: #FFC94A;">Cari</button>
            </div>
        </form>
    </div>

    <div style="margin-left: 60px;">
    <img src="img/tes2.png" class="card-img-top" alt="Card Image" style="border-radius: 20px 20px 20px 20px; height: 100%;">
</div>
</section>

<!--  <div style="margin-left: 60px;">
    <div class="card" style="width: 393px; height: 488px; border-radius: 20px; background-color: #8E98A8;">
    <img src="img/PelamarHome.jpg" class="card-img-top" alt="Card Image" style="border-radius: 20px 20px 20px 20px; height: 100%;">
        <div class="card-body">
        </div>
    </div>
</div> -->

<!-- Section Akhir -->

<!-- Section Kedua -->
<section style="background-color: #FFFFFF; padding: 75px;">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-4">
                <h3 style="color: #1679AB;">Kategori Pekerjaan</h3>
                <p style="color: #1679AB;">Temukan Lowongan Pekerjaan Terbaik Tanpa Batas!</p>
            </div>
        </div>
        <div class="row justify-content-center">
        <div class="col-md-3 mb-4">
    <div class="card" style="width: 290px; height: 179px; border-radius: 20px; background-color: #1679AB; position: relative; margin-left: 10px;">
        <div class="card-body text-center">
<img src="svg/Akutansi.svg" alt="Akuntansi & Keuangan" style="width: 50px; height: 50px; position: absolute; left: 0; top: 65px; margin-left: 40px;" class="white-icon">
            <h5 class="card-title" style="color: #FFFFFF; margin-left: 60px; margin-top: 65px;">Akuntansi</h5>
        </div>
    </div>
</div>

<div class="col-md-3 mb-4">
    <div class="card" style="width: 290px; height: 179px; border-radius: 20px; background-color: #1679AB; position: relative; margin-left: 10px;">
        <div class="card-body text-center">
            <img src="svg/Pemasaran.svg" alt="Pemasaran & Penjualan" style="width: 50px; height: 50px; position: absolute; left: 0; top: 65px; margin-left: 40px;" class="white-icon">
            <h5 class="card-title" style="color: #FFFFFF; margin-left: 75px; margin-top: 50px;">Pemasaran & Penjualan</h5>
        </div>
    </div>
</div>

<div class="col-md-3 mb-4">
    <div class="card" style="width: 290px; height: 179px; border-radius: 20px; background-color: #1679AB; position: relative; margin-left: 5px;">
        <div class="card-body text-center">
            <img src="svg/Administrasi.svg" alt="Administrasi" style="width: 50px; height: 50px; position: absolute; left: 0; top: 65px; margin-left: 40px;" class="white-icon">
            <h5 class="card-title" style="color: #FFFFFF; margin-left: 60px; margin-top: 65px;">Administrasi</h5>
        </div>
    </div>
</div>

<div class="col-md-3 mb-4">
    <div class="card" style="width: 290px; height: 179px; border-radius: 20px; background-color: #1679AB; position: relative; margin-left: 1px;">
        <div class="card-body text-center">
            <img src="svg/Teknologi.svg" alt="Teknologi Informasi" style="width: 50px; height: 50px; position: absolute; left: 0; top: 65px; margin-left: 25px;" class="white-icon">
            <h5 class="card-title" style="color: #FFFFFF; margin-left: 60px; margin-top: 65px;">Teknologi Informasi</h5>
        </div>
    </div>
</div>

        <div class="row justify-content-center">
        <div class="col-md-3 mb-4">
    <div class="card" style="width: 290px; height: 179px; border-radius: 20px; background-color: #1679AB; position: relative; margin-left: 2px;">
        <div class="card-body text-center">
            <img src="svg/HR1.svg" alt="Sumber Daya Manusia" style="width: 50px; height: 50px; position: absolute; left: 0; top: 65px; margin-left: 25px;" class="white-icon">
            <h5 class="card-title" style="color: #FFFFFF; margin-left: 60px; margin-top: 50px;">Sumber Daya Manusia</h5>
        </div>
    </div>
</div>

<div class="col-md-3 mb-4">
    <div class="card" style="width: 290px; height: 179px; border-radius: 20px; background-color: #1679AB; position: relative; margin-left: 2px;">
        <div class="card-body text-center">
            <img src="svg/Kesehatan.svg" alt="Perawatan Kesehatan" style="width: 50px; height: 50px; position: absolute; left: 0; top: 65px; margin-left: 25px;" class="white-icon">
            <h5 class="card-title" style="color: #FFFFFF; margin-left: 70px; margin-top: 50px;">Perawatan Kesehatan</h5>
        </div>
    </div>
</div>

<div class="col-md-3 mb-4">
    <div class="card" style="width: 290px; height: 179px; border-radius: 20px; background-color: #1679AB; position: relative; margin-left: 2px;">
        <div class="card-body text-center">
            <img src="svg/Hukum.svg" alt="Hukum" style="width: 50px; height: 50px; position: absolute; left: 0; top: 65px; margin-left: 40px;" class="white-icon">
            <h5 class="card-title" style="color: #FFFFFF; margin-left: 70px; margin-top: 60px;">Hukum</h5>
        </div>
    </div>
</div>

<div class="col-md-3 mb-4">
    <div class="card" style="width: 290px; height: 179px; border-radius: 20px; background-color: #1679AB; position: relative; margin-left: 2px;">
        <div class="card-body text-center">
            <img src="svg/Teknik.svg" alt="Teknik" style="width: 50px; height: 50px; position: absolute; left: 0; top: 65px; margin-left: 50px;" class="white-icon">
            <h5 class="card-title" style="color: #FFFFFF; margin-left: 70px; margin-top: 60px;">Teknik</h5>
        </div>
    </div>
</div>
            
        </div>
        <div class="row justify-content-center" style="margin-top: 20px;">
        <div class="col-md-6 text-center">
</div>

        </div>
    </div>
</section>
<!-- Section Akhir -->

<!-- Tambahan Tampilan Baru Ketiga -->
<section style="background-color: #1679AB; padding: 50px 0;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mb-4">
                <h3 style="color: white;">Pekerjaan Yang Populer Saat Ini</h3>
                <p style="color: white;">Temukan Ribuan Peluang Kerja Menarik untuk Karir Anda</p>
            </div>
        </div>
        <div class="row justify-content-center" style="margin-left: 30px;">
            <!-- Card 1 -->
            <div class="col-md-4 mb-4">
                <div class="card" style="width: 400px; height: 435px; border-radius: 20px; background-color: #EAECF1; position: relative;">
                    <div style="width: 100px; height: 100px; background-color: #9DD0FD; border-radius: 50%; position: absolute; left: 40px; top: 5px; margin-top: 30px; margin-left: -30px">
                    <img src="img/foto4.jpg" alt="Gambar" style="width: 100px; height: 100px; border-radius: 50%; position: absolute; top: 0; left: 0; object-fit: cover;">
                </div>
                        <h5 class="card-title" style="color: #000000; margin-top: 55px; margin-left: 125px; margin-bottom: 10px;">Nama Perusahaan</h5>
                        <p style="color: #000000; margin-bottom: 10px; margin-left: 125px;">3 hari yang lalu</p>
                    <hr style="border-color: #000000; margin-bottom: 70px; margin-top: 25px;">
                    <h5 style="color: #000000; margin-left: 20px; margin-top: -55px;">Digital Marketing</h5>
                    <p style="color: #000000; margin-left: 20px; margin-right: 15px;">Digital marketing adalah kegiatan pemasaran produk atau jasa...</p>
                    <div style="display: flex; justify-content: space-between; margin-left: 20px; margin-right: 20px; margin-top: -5px;">
            <div style="width: 80px; height: 30px; border: 1px solid #000000; background-color: #B2C4D4; border-radius: 5px; display: flex; align-items: center; justify-content: center;">
                Full Time
            </div>
            <div style="width: 80px; height: 30px; border: 1px solid #000000; background-color: #B2C4D4; border-radius: 5px; display: flex; align-items: center; justify-content: center; margin-right: 175px;">
                Full Time
            </div>
        </div>

        <div style="display: flex; align-items: center; margin-left: 20px; margin-right: 20px; margin-top: 20px;">
            <img src="svg/location.svg" alt="Lokasi Icon" width="20" style="margin-right: 10px;">
            <h6 style="color: #000000; margin-top: 5px;">Jakarta & Bandung</h6>
        </div>


        <div style="display: flex; justify-content: center; margin-top: 20px;">
        <a href="/DetailPekerjaan" style="display: inline-block; width: 373px; height: 58px; background-color: #FFC94A; color: #000000; text-decoration: none; line-height: 58px; text-align: center; border: none; border-radius: 5px;">
    Detail Pekerjaan
</a>


</div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-4 mb-4">
                <div class="card" style="width: 400px; height: 435px; border-radius: 20px; background-color: #EAECF1; position: relative;">
                <div style="width: 100px; height: 100px; background-color: #9DD0FD; border-radius: 50%; position: absolute; left: 40px; top: 5px; margin-top: 30px; margin-left: -30px">
                    <img src="img/foto2.jpg" alt="Gambar" style="width: 100px; height: 100px; border-radius: 50%; position: absolute; top: 0; left: 0; object-fit: cover;">
                </div>                        
                <h5 class="card-title" style="color: #000000; margin-top: 55px; margin-left: 125px; margin-bottom: 10px;">Nama Perusahaan</h5>
                        <p style="color: #000000; margin-bottom: 10px; margin-left: 125px;">3 hari yang lalu</p>
                    <hr style="border-color: #000000; margin-bottom: 70px; margin-top: 25px;">
                    <h5 style="color: #000000; margin-left: 20px; margin-top: -55px;">Digital Marketing</h5>
                    <p style="color: #000000; margin-left: 20px; margin-right: 15px;">Digital marketing adalah kegiatan pemasaran produk atau jasa...</p>
                    <div style="display: flex; justify-content: space-between; margin-left: 20px; margin-right: 20px; margin-top: -5px;">
            <div style="width: 80px; height: 30px; border: 1px solid #000000; background-color: #B2C4D4; border-radius: 5px; display: flex; align-items: center; justify-content: center;">
                Full Time
            </div>
            <div style="width: 80px; height: 30px; border: 1px solid #000000; background-color: #B2C4D4; border-radius: 5px; display: flex; align-items: center; justify-content: center; margin-right: 175px;">
                Full Time
            </div>
        </div>

        <div style="display: flex; align-items: center; margin-left: 20px; margin-right: 20px; margin-top: 20px;">
            <img src="svg/location.svg" alt="Lokasi Icon" width="20" style="margin-right: 10px;">
            <h6 style="color: #000000; margin-top: 5px;">Jakarta & Bandung</h6>
        </div>


        <div style="display: flex; justify-content: center; margin-top: 20px;">
        <a href="/DetailPekerjaan" style="display: inline-block; width: 373px; height: 58px; background-color: #FFC94A; color: #000000; text-decoration: none; line-height: 58px; text-align: center; border: none; border-radius: 5px;">
    Detail Pekerjaan
</a>
</div>
                </div>
            </div>


            <!-- Card 3 -->
            <div class="col-md-4 mb-4">
                <div class="card" style="width: 400px; height: 435px; border-radius: 20px; background-color: #EAECF1; position: relative;">
                <div style="width: 100px; height: 100px; background-color: #9DD0FD; border-radius: 50%; position: absolute; left: 40px; top: 5px; margin-top: 30px; margin-left: -30px">
                    <img src="img/google.jpg" alt="Gambar" style="width: 100px; height: 100px; border-radius: 50%; position: absolute; top: 0; left: 0; object-fit: cover;">
                </div>                        
                <h5 class="card-title" style="color: #000000; margin-top: 55px; margin-left: 125px; margin-bottom: 10px;">Nama Perusahaan</h5>
                        <p style="color: #000000; margin-bottom: 10px; margin-left: 125px;">3 hari yang lalu</p>
                    <hr style="border-color: #000000; margin-bottom: 70px; margin-top: 25px;">
                    <h5 style="color: #000000; margin-left: 20px; margin-top: -55px;">Digital Marketing</h5>
                    <p style="color: #000000; margin-left: 20px; margin-right: 15px;">Digital marketing adalah kegiatan pemasaran produk atau jasa...</p>
                    <div style="display: flex; justify-content: space-between; margin-left: 20px; margin-right: 20px; margin-top: -5px;">
            <div style="width: 80px; height: 30px; border: 1px solid #000000; background-color: #B2C4D4; border-radius: 5px; display: flex; align-items: center; justify-content: center;">
                Full Time
            </div>
            <div style="width: 80px; height: 30px; border: 1px solid #000000; background-color: #B2C4D4; border-radius: 5px; display: flex; align-items: center; justify-content: center; margin-right: 175px;">
                Full Time
            </div>
        </div>

        <div style="display: flex; align-items: center; margin-left: 20px; margin-right: 20px; margin-top: 20px;">
            <img src="svg/location.svg" alt="Lokasi Icon" width="20" style="margin-right: 10px;">
            <h6 style="color: #000000; margin-top: 5px;">Jakarta & Bandung</h6>
        </div>


        <div style="display: flex; justify-content: center; margin-top: 20px;">
        <a href="/DetailPekerjaan" style="display: inline-block; width: 373px; height: 58px; background-color: #FFC94A; color: #000000; text-decoration: none; line-height: 58px; text-align: center; border: none; border-radius: 5px;">
    Detail Pekerjaan
</a>
</div>
                </div>
            </div>

            <div class="row justify-content-center" style="margin-top: 20px;">
    <div class="col-md-6 text-center">
        <a href="/DetailPekerjaan" class="btn btn-secondary" style="color: #000000; background-color: #FFC94A;">Lihat Selengkapnya</a>
    </div>
</div>
    </div>
</section>
<!-- Akhir -->

<!-- Section Keempat -->
<section style="background-color: #FFFFFF; padding: 75px;">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-4">
                <h3 style="color: #1679AB;">Bagaimana Cara Kerjanya</h3>
            </div>
        </div>
        <div class="row justify-content-center">
    <div class="col-md-4 mb-4 text-center">
        <div class="card" style="width: 312px; height: 301px; text-align: center; padding: 20px; border: 2px solid #1679AB; border-radius: 20px; display: flex; flex-direction: column; justify-content: center; margin-left: 65px;">
            <h4 style="color: #1679AB; margin-bottom: 10px;">Buat Akun</h4>
            <p style="color: #1679AB; margin-bottom: 0;">Buat akun di Link Kerjaku sangatlah mudah dan cepat. Cukup ikuti beberapa langkah sederhana</p>
        </div>
    </div>
    <div class="col-md-4 mb-4 text-center">
        <div class="card" style="width: 312px; height: 301px; text-align: center; padding: 20px; border: 2px solid #1679AB; border-radius: 20px; display: flex; flex-direction: column; justify-content: center; margin-left: 50px;">
            <h4 style="color: #1679AB; margin-bottom: 10px;">Lengkapi Profil</h4>
            <p style="color: #1679AB; margin-bottom: 0;">Lengkapi profil Anda di Link Kerjaku dapat meningkatkan peluang Anda dalam mencari pekerjaan</p>
        </div>
    </div>
    <div class="col-md-4 mb-4 text-center">
        <div class="card" style="width: 312px; height: 301px; text-align: center; padding: 20px; border: 2px solid #1679AB; border-radius: 20px; display: flex; flex-direction: column; justify-content: center; margin-left: 35px;">
            <h4 style="color: #1679AB; margin-bottom: 10px;">Lengkapi Profil</h4>
            <p style="color: #1679AB; margin-bottom: 0;">Jangan lewatkan kesempatan ini, ayo lamar sekarang</p>
        </div>
    </div>
</div>

    </div>
</section>
<!-- Section Akhir -->

<!-- Tambahan Tampilan Baru Kelima  -->
<section
            class="container splide mt-5"
            aria-label="Splide Basic HTML Example"
            style="margin-bottom: -40px;"

        >
        <h1 style="text-align: center; color: #146D9A;">Perusahaan</h1>
        <p style="text-align: center; color: #146D9A;">Buka Pintu Kesempatan Karir di Perusahaan Impian Anda!</p>
            <div class="splide__track" style="margin-top: 55px;">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <div
                            class="card"
                            style="
                                width: 220px;
                                height: 235px;
                                border-radius: 16px;
                            "
                        >
                            <div class="card-body">
                                <img
                                    src="img/Gojek.jpg"
                                    class="card-img-top"
                                    alt="Card image"
                                    style="
                                        width: 105px;
                                        height: 105px;
                                        margin-left: 45px;
                                    "
                                />
                                <div class="card-body">
                                    <h5
                                        class="card-text"
                                        style="
                                            text-align: center;
                                            margin-left: 10px;
                                            margin-top: -15px;
                                        "
                                    >
                                        Gojek
                                    </h5>
                                    <div style="text-align: center">
                                        ⭐
                                        <span style="margin-left: 5px"
                                            >4.2 - 178 Reviews</span
                                        >
                                    </div>
                                </div>
                                <div
                                    class="card-body"
                                    style="
                                        width: 130px;
                                        height: 24px;
                                        background-color: #e8f2f7;
                                        text-align: center;
                                        padding-top: 1px;
                                        border-radius: 8px;
                                        margin-left: 30px;
                                    "
                                >
                                    82 Pekerjaan
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div
                            class="card"
                            style="
                                width: 220px;
                                height: 235px;
                                border-radius: 16px;
                            "
                        >
                            <div class="card-body">
                                <img
                                    src="img/Tokopedia.jpg"
                                    class="card-img-top"
                                    alt="Card image"
                                    style="
                                        width: 105px;
                                        height: 105px;
                                        margin-left: 45px;
                                    "
                                />
                                <div class="card-body">
                                    <h5
                                        class="card-text"
                                        style="
                                            text-align: center;
                                            margin-left: 10px;
                                            margin-top: -15px;
                                        "
                                    >
                                        Tokopedia
                                    </h5>
                                    <div style="text-align: center">
                                        ⭐
                                        <span style="margin-left: 5px"
                                            >4.2 - 178 Reviews</span
                                        >
                                    </div>
                                </div>
                                <div
                                    class="card-body"
                                    style="
                                        width: 130px;
                                        height: 24px;
                                        background-color: #e8f2f7;
                                        text-align: center;
                                        padding-top: 1px;
                                        border-radius: 8px;
                                        margin-left: 30px;
                                    "
                                >
                                    82 Pekerjaan
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div
                            class="card"
                            style="
                                width: 220px;
                                height: 235px;
                                border-radius: 16px;
                            "
                        >
                            <div class="card-body">
                                <img
                                    src="img/Shope.jpg"
                                    class="card-img-top"
                                    alt="Card image"
                                    style="
                                        width: 105px;
                                        height: 105px;
                                        margin-left: 45px;
                                    "
                                />
                                <div class="card-body">
                                    <h5
                                        class="card-text"
                                        style="
                                            text-align: center;
                                            margin-left: 10px;
                                            margin-top: -15px;
                                        "
                                    >
                                        Shopee
                                    </h5>
                                    <div style="text-align: center">
                                        ⭐
                                        <span style="margin-left: 5px"
                                            >4.2 - 178 Reviews</span
                                        >
                                    </div>
                                </div>
                                <div
                                    class="card-body"
                                    style="
                                        width: 130px;
                                        height: 24px;
                                        background-color: #e8f2f7;
                                        text-align: center;
                                        padding-top: 1px;
                                        border-radius: 8px;
                                        margin-left: 30px;
                                    "
                                >
                                    82 Pekerjaan
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div
                            class="card"
                            style="
                                width: 220px;
                                height: 235px;
                                border-radius: 16px;
                            "
                        >
                            <div class="card-body">
                                <img
                                    src="img/google.jpg"
                                    class="card-img-top"
                                    alt="Card image"
                                    style="
                                        width: 105px;
                                        height: 105px;
                                        margin-left: 45px;
                                    "
                                />
                                <div class="card-body">
                                    <h5
                                        class="card-text"
                                        style="
                                            text-align: center;
                                            margin-left: 10px;
                                            margin-top: -15px;
                                        "
                                    >
                                        Google
                                    </h5>
                                    <div style="text-align: center">
                                        ⭐
                                        <span style="margin-left: 5px"
                                            >4.2 - 178 Reviews</span
                                        >
                                    </div>
                                </div>
                                <div
                                    class="card-body"
                                    style="
                                        width: 130px;
                                        height: 24px;
                                        background-color: #e8f2f7;
                                        text-align: center;
                                        padding-top: 1px;
                                        border-radius: 8px;
                                        margin-left: 30px;
                                    "
                                >
                                    82 Pekerjaan
                                </div>
                            </div>
                        </div>
                    </li>


                    

                
                </ul>
            </div>
            
            <div style="display: flex; justify-content: center; margin-top: 45px;">
        <div class="col-md-6 text-center">
    <a href="/LihatPerusahaan2" class="btn btn-secondary" style="color: #000000; background-color: #FFC94A;">Lihat Selengkapnya</a>
</div>
</div>
        </section>
<!-- Section Akhir -->


<!-- Section Keenam -->
<section style="background-color: #FFFFFF; padding: 125px;">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-4">
                <h3 style="color: #146D9A;">Apa Kata Klien Kami?</h3>
            </div>
        </div>
        <div class="row justify-content-center">
        <div class="col-md-4 mb-4">
    <div style="width: 393px; height: 401px; padding: 20px; border-radius: 20px; border: 1px solid #B7D5E5; position: relative; background-color: #B7D5E5;">
        <div style="width: 100px; height: 100px; border-radius: 50%; position: absolute; top: 15px; left: 20px; display: flex; justify-content: center; align-items: center; margin-top: 10px;">
        <img src="img/profill 1.jpg" alt="Gambar" style="width: 80px; height: 80px; border-radius: 50%; object-fit: cover;">
        </div>
        <h4 style="margin-top: 20px; color: #000000; position: absolute; top: 20px; left: 140px;">Alex Wong</h4>
        <p style="margin-top: 50px; color: #000000; position: absolute; top: 20px; left: 140px;">HRD</p>
        <div style="margin-top: -15px; text-align: center; position: absolute; top: 155px; left: 100px;">
            <div>
                <span style="color: #FFD700; font-size: 45px;">★</span>
                <span style="color: #FFD700; font-size: 45px;">★</span>
                <span style="color: #FFD700; font-size: 45px;">★</span>
                <span style="color: #FFD700; font-size: 45px;">★</span>
                <span style="color: #FFD700; font-size: 45px;">★</span>
            </div>
        </div>
        <div style="margin-top: 215px;">
                <p style="font-size: 14px; color: #000000;">Link Kerjaku sangat membantu saya dalam menemukan pekerjaan yang sesuai dengan minat dan kualifikasi saya. Proses lamarannya juga mudah dan cepat. Terima kasih Link Kerjaku!</p>
            </div>
    </div>
</div>


<div class="col-md-4 mb-4">
    <div style="width: 393px; height: 401px; padding: 20px; border-radius: 20px; border: 1px solid #B7D5E5; position: relative; background-color: #B7D5E5;">
        <div style="width: 100px; height: 100px; border-radius: 50%; position: absolute; top: 15px; left: 20px; display: flex; justify-content: center; align-items: center; margin-top: 10px;">
        <img src="img/profill 2.jpg" alt="Gambar" style="width: 80px; height: 80px; border-radius: 50%; object-fit: cover;">
        </div>
        <h4 style="margin-top: 20px; color: #000000; position: absolute; top: 20px; left: 140px;">Fanny Yong</h4>
        <p style="margin-top: 50px; color: #000000; position: absolute; top: 20px; left: 140px;">Senior Executive</p>
        <div style="margin-top: -15px; text-align: center; position: absolute; top: 155px; left: 100px;">
            <div>
                <span style="color: #FFD700; font-size: 45px;">★</span>
                <span style="color: #FFD700; font-size: 45px;">★</span>
                <span style="color: #FFD700; font-size: 45px;">★</span>
                <span style="color: #FFD700; font-size: 45px;">★</span>
                <span style="color: #FFD700; font-size: 45px;">★</span>
            </div>
        </div>
        <div style="margin-top: 215px;">
                <p style="font-size: 14px; color: #000000;">Saya senang menggunakan Link Kerjaku karena platform ini menyediakan banyak informasi lowongan kerja yang akurat dan up-to-date. Saya juga bisa mendapatkan tips dan trik</p>
            </div>
    </div>
</div>

<div class="col-md-4 mb-4">
    <div style="width: 393px; height: 401px; padding: 20px; border-radius: 20px; border: 1px solid #B7D5E5; position: relative; background-color: #B7D5E5;">
        <div style="width: 100px; height: 100px; border-radius: 50%; position: absolute; top: 15px; left: 20px; display: flex; justify-content: center; align-items: center; margin-top: 10px;">
        <img src="img/profill 3.jpg" alt="Gambar" style="width: 80px; height: 80px; border-radius: 50%; object-fit: cover;">
        </div>
        <h4 style="margin-top: 20px; color: #000000; position: absolute; top: 20px; left: 140px;">Richard Lee</h4>
        <p style="margin-top: 50px; color: #000000; position: absolute; top: 20px; left: 140px;">CEO</p>
        <div style="margin-top: -15px; text-align: center; position: absolute; top: 155px; left: 100px;">
            <div>
                <span style="color: #FFD700; font-size: 45px;">★</span>
                <span style="color: #FFD700; font-size: 45px;">★</span>
                <span style="color: #FFD700; font-size: 45px;">★</span>
                <span style="color: #FFD700; font-size: 45px;">★</span>
                <span style="color: #FFD700; font-size: 45px;">★</span>
            </div>
        </div>
                <div style="margin-top: 215px;">
                <p style="font-size: 14px; color: #000000;">Link Kerjaku adalah platform yang sangat bermanfaat bagi pencari kerja seperti saya. Saya bisa terhubung dengan perusahaan-perusahaan ternama dan mengikuti perkembangan terbaru</p>
            </div>
    </div>
</div>

</div>
    </div>
</section>
<!-- Section Akhir -->

<!-- Section Baru Ketujuh -->
<section style="background-color: #126189; padding: 50px 0;">
    <div class="container text-center">
        <h3 style="color: #FFFFFF;">Blog</h3>
        <p style="color: #FFFFFF;">Keputusan Tepat, Masa Depan Cerah: Andalkan Keahlian Kami!</p>
        <div class="row justify-content-center">
            <div class="col-md-4 mb-4">
                <div class="card" style="width: 393px; height: 448px; border-radius: 10px; overflow: hidden; margin-top: 30px; margin-left: 35px;">
                    <img src="img/1.jpg" class="card-img-top" alt="Image 1" style="width: 393px; height: 254px;">
                    <div style="position: absolute; bottom: 0; left: 0; right: 0; padding: 10px; display: flex; align-items: center; margin-bottom: 130px;">
            <img src="svg/person.svg" alt="Icon 1" width="26" height="26" style="margin-right: 10px;">
            <p style="margin-right: auto;  margin-top: 15px;">Kania</p>
            <img src="svg/date.svg" alt="Icon 2" width="26" height="26" style="margin-left: auto;">
            <p style="margin-left: 10px; margin-right: 45px; margin-top: 15px;">10 May 2024</p>
        </div>
        <hr style="border-color: #000000; margin-top: 45px;">


        <div style="display: flex; align-items: center; margin-left: 20px; margin-bottom: -55px; margin-top: 5px;">
    <h5 style="margin: 0; text-align: left;">Menuju Sukses : Panduan Lengkap untuk Pencari Kerja</h5>
</div>


<div style="display: flex; align-items: center; margin-left: 20px; margin-top: 75px; margin-bottom: 5px;">
    <p style="margin-right: 15px;">Lihat detail</p>
    <a href="/detailblog2" style="margin-bottom: 20px;">--></a>
</div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card" style="width: 393px; height: 448px; border-radius: 10px; overflow: hidden; margin-top: 30px; margin-left: 35px;">
                    <img src="img/2.jpg" class="card-img-top" alt="Image 1" style="width: 393px; height: 254px;">
                    <div style="position: absolute; bottom: 0; left: 0; right: 0; padding: 10px; display: flex; align-items: center; margin-bottom: 130px;">
            <img src="svg/person.svg" alt="Icon 1" width="26" height="26" style="margin-right: 10px;">
            <p style="margin-right: auto;  margin-top: 15px;">Putri</p>
            <img src="svg/date.svg" alt="Icon 2" width="26" height="26" style="margin-left: auto;">
            <p style="margin-left: 10px; margin-right: 45px; margin-top: 15px;">20 April 2024</p>
        </div>
        <hr style="border-color: #000000; margin-top: 45px;">


        <div style="display: flex; align-items: center; margin-left: 20px; margin-bottom: -55px; margin-top: 5px;">
    <h5 style="margin: 0; text-align: left;">Menuju Sukses : Panduan Lengkap untuk Pencari Kerja</h5>
</div>


<div style="display: flex; align-items: center; margin-left: 20px; margin-top: 75px; margin-bottom: 5px;">
    <p style="margin-right: 15px;">Lihat detail</p>
    <a href="/detailblog2" style="margin-bottom: 20px;">--></a>
</div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card" style="width: 393px; height: 448px; border-radius: 10px; overflow: hidden; margin-top: 30px; margin-left: 35px;">
                    <img src="img/3.jpg" class="card-img-top" alt="Image 1" style="width: 393px; height: 254px;">
                    <div style="position: absolute; bottom: 0; left: 0; right: 0; padding: 10px; display: flex; align-items: center; margin-bottom: 130px;">
            <img src="svg/person.svg" alt="Icon 1" width="26" height="26" style="margin-right: 10px;">
            <p style="margin-right: auto;  margin-top: 15px;">Roni</p>
            <img src="svg/date.svg" alt="Icon 2" width="26" height="26" style="margin-left: auto;">
            <p style="margin-left: 10px; margin-right: 45px; margin-top: 15px;">19 May 2024</p>
        </div>
        <hr style="border-color: #000000; margin-top: 45px;">


        <div style="display: flex; align-items: center; margin-left: 20px; margin-bottom: -55px; margin-top: 5px;">
    <h5 style="margin: 0; text-align: left;">Menuju Sukses : Panduan Lengkap untuk Pencari Kerja</h5>
</div>


<div style="display: flex; align-items: center; margin-left: 20px; margin-top: 75px; margin-bottom: 5px;">
    <p style="margin-right: 15px;">Lihat detail</p>
    <a href="/detailblog2" style="margin-bottom: 20px;">--></a>
</div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section Akhir -->

<!-- Footer -->
<footer style="background-color: #FFC94A; padding: 45px;">
    <div class="container">
        <div class="row">
            <div class="col-md-3 mb-4">
                <!-- Logo -->
                <img src="img/logo2.png" alt="Logo" style="max-width: 100px;">
                                <!-- Lorem10 -->
                                <h6 style="margin-top: 55px;">Link Kerjaku</h6>
                                <h6 style="margin-top: 10px;">(Portal Lowongan Kerja)</h6>
            </div>
            <div class="col-md-3 mb-4">
                <!-- Kategori -->
                <h5>Kategori</h5>
                <h5 style="margin-top: 70px;">Tentang Link Kerjaku</h5>
                <h5 style="margin-top: 25px;">Hubungi Kami</h5>
                <h5 style="margin-top: 25px;">Syarat dan Ketentuan</h5>
                <h5 style="margin-top: 25px;">Kebijakan Privasi</h5>
            </div>
            <div class="col-md-3 mb-4">
                <!-- Tentang -->
                <h5>Tentang</h5>
                <h5 style="margin-top: 70px;">Bantuan</h5>
                <h5 style="margin-top: 25px;">Blog</h5>
                <h5 style="margin-top: 25px;">Cari Lowongan Kerja</h5>
                <h5 style="margin-top: 25px;">Pasang Lowongan</h5>
            </div>
            <div class="col-md-3 mb-4">
                <!-- Dukungan -->
                <h5>Opsional</h5>
                <h5 style="margin-top: 70px;">Penghargaan</h5>
                <h5 style="margin-top: 25px;">Logo Partner</h5>
                <h5 style="margin-top: 25px;">Bahasa</h5>
                <h5 style="margin-top: 25px;">
    <a href="/Kontak" style="text-decoration: none; color: inherit;">Kontak</a>
</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- Icon email, telefon, lokasi -->
                <div>
                <span><img src="svg/email.svg" width="25" alt="Email Icon"> Email Link Kerjaku</span>
                </div>
                <div style="margin-top: 15px;">
                <span><img src="svg/telephone.svg" width="25" alt="Phone Icon"> (+62) 0000000000</span>
                </div>
                <div style="margin-top: 15px;">
                <span><img src="svg/location.svg" width="25" alt="Location Icon"> Lokasi Lengkap</span>
                </div>
            </div>
        </div>
        <hr style="margin-top: 20px;">
        <div class="row">
    <div class="col-md-6">
        <!-- Credit -->
        <h6>Ikuti Kami di Media Sosial</h6>
    </div>
    <div class="col-md-6">
        <!-- Ikuti Kami -->
        <ul class="list-inline text-right" style="margin: 0; padding: 0; list-style: none; margin-left: 455px;">
            <li class="list-inline-item" style="margin-right: 10px;"><a href="#"><img src="svg/facebook.svg" width="30" alt="Facebook Icon"></a></li>
            <li class="list-inline-item" style="margin-right: 10px;"><a href="#"><img src="svg/instagram.svg" width="30" alt="Instagram Icon"></a></li>
            <li class="list-inline-item" style="margin-right: 10px;"><a href="#"><img src="svg/link.svg" width="30" alt="LinkedIn Icon"></a></li>
            <li class="list-inline-item"><a href="#"><img src="svg/twitter.svg" width="30" alt="Twitter Icon"></a></li>
        </ul>
    </div>
</div>
    </div>
</footer>
<!-- Akhir Footer -->

<script>
document.getElementById('dropdownIcon').addEventListener('click', function() {
    var dropdownMenu = document.getElementById('dropdownMenu');
    if (dropdownMenu.classList.contains('show')) {
        dropdownMenu.classList.remove('show');
    } else {
        dropdownMenu.classList.add('show');
    }
});

// Close the dropdown menu if clicked outside
window.onclick = function(event) {
    if (!event.target.matches('#dropdownIcon') && !event.target.closest('.arrow-icon')) {
        var dropdownMenu = document.getElementById('dropdownMenu');
        if (dropdownMenu.classList.contains('show')) {
            dropdownMenu.classList.remove('show');
        }
    }
}

    // Ambil semua card
    const cards = document.querySelectorAll('.card');

    // Iterasi semua card
    cards.forEach(card => {
        // Tambahkan event listener untuk setiap card
        card.addEventListener('click', function() {
            // Toggle class 'show-details' pada card yang diklik
            this.classList.toggle('show-details');
        });
    });

    function confirmLogout() {
    Swal.fire({
        title: 'Logout dan Kembali Ke Halaman Home?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Iya',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = '/';
        }
    });
}

document.addEventListener("DOMContentLoaded", function () {
            var splide = new Splide(".container.splide", {
                type: "loop",
                drag: "free",
                focus: "center",
                perPage: 4,
                autoScroll: {
                    speed: 1,
                },
            });
            splide.mount(window.splide.Extensions);
            var slider = new Splide(".another.splide", {
                type: "loop",
                drag: "free",
                focus: "center",
                perPage: 4,
                autoScroll: {
                    speed: -1,
                },
            });
            slider.mount(window.splide.Extensions);
        });

</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <script src="owl.carousel.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
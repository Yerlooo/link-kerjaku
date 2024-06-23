<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Link-Kerjaku | Lokasi</title>
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
                    <a class="nav-link active ms-4" aria-current="page" href="/HomePagePerusahaan" style="color: #000000;">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active ms-4" aria-current="page" href="/StatusPelamar" style="color: #000000;">Status Pelamar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active ms-4" aria-current="page" href="/aboutperusahaan" style="color: #000000;">Tentang Kami</a>
                </li>
            </ul>
            <div class="d-flex">
            <a href="/BuatLowongan" class="btn btn-secondary" role="button" style="background-color: #FFC94A; border: none; color: #000000; margin-right: 15px;">Buat Lowongan</a>
            <a href="/ProfillPerusahaan" class="btn-btn d-flex align-items-center justify-content-center" role="button" style="width: 40px; height: 40px; border-radius: 50%; margin-left: 10px;">
        <img src="img/ProfilPerusahaan.jpg" alt="Profile Image" style="width: 45px; height: 45px; border-radius: 50%;">
    </a>
</div>
        </div>
    </div>
</nav>

<!-- Section Pertama -->
<section style="background-color: #E8F2F7; padding: 70px; display: flex; align-items: center; justify-content: center;">
<div style="display: flex; align-items: center; flex-direction: column; margin-top: 20px; margin-right: -10px;">
    <div style="width: 85px; height: 84px; background-color: blue; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 24px; margin-bottom: 10px;">1</div>
    <p style="margin-top: 0;">Posting Lowongan Baru</p>
</div>
    <div style="width: 10%; height: 2px; background-color: blue; margin-left: 10px; margin-right: 25px; margin-bottom: 25px;"></div>

    <div style="display: flex; align-items: center; flex-direction: column; margin-top: 20px; margin-left: -10px;">
    <div style="width: 85px; height: 84px; background-color: blue; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 24px; margin-bottom: 10px;">
    &#10003;
</div>
    <p style="margin-top: 0;">Informasi Lainnya</p>
</div>

    <div style="width: 10%; height: 2px; background-color: blue; margin-left: 10px; margin-right: 25px; margin-bottom: 25px;"></div>

    <div style="display: flex; align-items: center; flex-direction: column; margin-top: 20px;">
    <div style="width: 85px; height: 84px; background-color: blue; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 24px; margin-bottom: 10px;">3</div>
    <p style="margin-top: 0;">Lokasi</p>
</div>
</section>
<!-- Section Akhir -->


<!-- Section Kedua -->
<section style="background-color: #E8F2F7; padding: 70px; display: flex; align-items: center; justify-content: center;">
    <div style="margin-left: 55px;">
        <h2 style="text-align: center;">Lokasi</h2>
        <hr style="border: 1px solid black; margin-bottom: 20px;">
        <h6 style="text-align: left;">Negara*</h6>
        <form action="/BuatLowongan3" method="post">
            @csrf
            <input name="negara" type="text" placeholder="Negara" style="width: 100%; height: 40px; border: 1px solid black; border-radius: 8px; padding: 5px; margin-bottom: 20px;" required autofocus>
            <h6 style="text-align: left; margin-top: 15px;">Alamat Lengkap*</h6>
            <input name="alamat" type="text" placeholder="Alamat Lengkap" style="width: 100%; height: 40px; border: 1px solid black; border-radius: 8px; padding: 5px; margin-bottom: 20px;" required>
            <h6 style="text-align: left; margin-top: 15px;">Kode Pos*</h6>
            <input name="pos_code" type="text" placeholder="Kode Pos" style="width: 100%; height: 40px; border: 1px solid black; border-radius: 8px; padding: 5px; margin-bottom: 20px;" required>
    </div>
</section>
<!-- Section Akhir -->

<!-- Tambahan Section -->
<section style="background-color: #E8F2F7; padding: 100px; display: flex; align-items: center; justify-content: center;">
</section>
<!-- Tambahan Section -->

<!-- Tambahan Section -->
<section style="background-color: #E8F2F7; padding: 5px; display: flex; align-items: center; justify-content: center;">
<a href="/BuatLowongan2" style="text-decoration: none; margin-left: auto; margin-right: 855px; margin-top: -255px;">
    <button style="background-color: #FFC94A; border: none; border-radius: 8px; color: #000000; padding: 10px;">
    <img src="svg/left.svg"style="width: 20px; height: 20px; margin-right: 5px;">
        Kembali
    </button>
</a>
<a href="/unggahlowongan" style="text-decoration: none; margin-left: auto; margin-right: 100px; margin-top: -255px;">
    <button type="submit" style="background-color: #FFC94A; border: none; border-radius: 8px; color: #000000; padding: 10px;">
        Unggah
    </button>
</a>
</section>
</form>
<!-- Tambahan Section -->


<!-- Footer -->
<footer style="background-color: #FFC94A; padding: 30px;">
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Link-Kerjaku | Buat Perusahaan</title>
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
                    <a class="nav-link active ms-4" aria-current="page" href="/HomePagePerusahaan" style="color: #146D9A;">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active ms-4" aria-current="page" href="/StatusPelamar" style="color: #082A3C;">Status Pelamar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active ms-4" aria-current="page" href="/aboutperusahaan" style="color: #082A3C;">Tentang Kami</a>
                </li>
            </ul>
            <div class="d-flex align-items-center">
            <a href="/BuatLowongan" class="btn btn-secondary" role="button" style="background-color: #FFC94A; border: none; color: #000000; margin-right: 15px;">Buat Lowongan</a>
    <a href="/ProfillPelamar" class="btn-btn d-flex align-items-center justify-content-center" role="button" style="width: 40px; height: 40px; border-radius: 50%; margin-left: 10px; margin-right: 10px;" title="Olivia Rhye">
        <img src="img/ProfilPerusahaan.jpg" alt="Profile Image" style="width: 45px; height: 45px; border-radius: 50%;">
    </a>
    <div id="dropdownIcon" class="arrow-icon" style="margin-left: 10px; width: 26px; height: 26px; border: 2px solid #FFC94A; border-radius: 50%; display: flex; align-items: center; justify-content: center; cursor: pointer;">
        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
            <path d="M6 9l6 6 6-6"></path>
        </svg>
    </div>
</div>

<div id="dropdownMenu" class="dropdown-menu">
    <div class="dropdown-content">
    <div class="dropdown-header" style="background-image: url('img/pelamar.jpg'); background-size: cover; background-position: center;">
    <img src="img/ProfilPerusahaan.jpg" alt="Profile Image" class="dropdown-profile-img">
    <span>Perusahaan@gmail.com</span>
</div>

        <div class="dropdown-divider"></div>
        <div class="dropdown-item" onclick="window.location.href='/ProfillPerusahaan';">
            <img src="svg/edit.svg" alt="Edit Icon" class="dropdown-icon">
            Edit Profil
        </div>
        <div class="dropdown-divider"></div>
        <div class="dropdown-item" onclick="window.location.href='/';">
            <img src="svg/logout.svg" alt="Logout Icon" class="dropdown-icon">
            Logout
        </div>
    </div>
</div>

        </div>
    </div>
</nav>

<!-- Section Pertama -->
<section style="background-color: #146D9A; padding: 70px; display: flex; align-items: center; justify-content: center;">
<div style="margin-right: 10px; text-align: center;">
<h3 style="color: white;">Bergabunglah dengan <span style="color: #FFC94A;">Link Kerjaku</span> dan Temukan Talenta Terbaik untuk</h3>
    <h3 style="color: #FFFFFF;">Perusahaan Anda!</h3>
    <p style="color: #FFFFFF;">Bantu Ciptakan Masa Depan Pekerjaan dengan Membuka Lowongan di Platform Job Portal Baru yang Menjanjikan</p>
</div>
</section>
<!-- Section Akhir -->

<!-- Section Kedua -->
<section style="background-color: #ffff; padding: 70px; display: flex; align-items: center; justify-content: center;">
<div style="margin-right: 10px; text-align: center;">
    <h5 style="color: #146D9A;">Link Kerjaku adalah platform job portal baru yang inovatif dan mudah digunakan, dirancang untuk </h5>
    <h5 style="color: #146D9A;">membantu perusahaan menemukan talenta terbaik dan pencari kerja menemukan pekerjaan impian </h5>
    <h5 style="color: #146D9A;">mereka.</h5>
</div>
</section>
<!-- Section Akhir -->

<!-- Section Ketiga -->
<section style="background-color: #ffffff; padding: 55px;">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5 mb-4 text-center">
            <div style="width: 100%; height: 301px; text-align: center; padding: 20px; border: 1px solid #8DA4B8; border-radius: 20px; display: flex; flex-direction: column; justify-content: center; background-color: #E8F2F7;">
            <img src="svg/basis.svg" alt="Icon" style="width: 100px; height: 120px; margin-bottom: 10px; margin-left: 185px;">
                <h4 style="color: #146D9A; margin-bottom: 10px; margin-top: 0;">Basis pengguna yang luas</h4>
            </div>
        </div>
        <div class="col-md-5 mb-4 text-center">
            <div style="width: 100%; height: 301px; text-align: center; padding: 20px; border: 1px solid #8DA4B8; border-radius: 20px; display: flex; flex-direction: column; justify-content: center; background-color: #E8F2F7;">
            <img src="svg/alat.svg" alt="Icon" style="width: 100px; height: 120px; margin-bottom: 10px; margin-left: 195px;">
                <h4 style="color: #146D9A; margin-bottom: 10px; margin-top: 0;">Alat pencocokan yang canggih</h4>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-5 mb-4 text-center">
            <div style="width: 100%; height: 301px; text-align: center; padding: 20px; border: 1px solid #8DA4B8; border-radius: 20px; display: flex; flex-direction: column; justify-content: center; background-color: #E8F2F7;">
            <img src="svg/biaya.svg" alt="Icon" style="width: 100px; height: 120px; margin-bottom: 10px; margin-left: 195px;">
                <h4 style="color: #146D9A; margin-bottom: 10px; margin-top: 0;">Biaya yang terjangkau</h4>
            </div>
        </div>
        <div class="col-md-5 mb-4 text-center">
            <div style="width: 100%; height: 301px; text-align: center; padding: 20px; border: 1px solid #8DA4B8; border-radius: 20px; display: flex; flex-direction: column; justify-content: center; background-color: #E8F2F7;">
            <img src="svg/platform.svg" alt="Icon" style="width: 100px; height: 120px; margin-bottom: 10px; margin-left: 195px;">
                <h4 style="color: #146D9A; margin-bottom: 10px; margin-top: 0;">Platform yang mudah digunakan</h4>
            </div>
        </div>
    </div>
</div>


</section>
<!-- Akhir -->

<!-- Section Keempat -->
<section style="background-color: #1679AB; padding: 50px 0;">
<div class="container">
    <h2 style="text-align: center; margin-bottom: 70px;">Manfaat Membuka Lowongan di Link Kerjaku</h2>
    <div class="row justify-content-center">
    <div class="col-md-10 mb-4">
    <div style="background-color: #E9EBF8; padding: 20px; border-radius: 0px; text-align: justify;">
        <div style="display: flex; align-items: center;">
            <div style="margin-left: 100px;">
                <h5>Menjangkau lebih</h5>
                <h5>banyak calon pelamar</h5>
            </div>
        </div>
        <p style="margin-left: 550px; margin-bottom: 0; margin-top: -60px; margin-right: 100px;">Kami membantu perusahaan menjangkau lebih banyak calon pelamar yang berkualitas dari berbagai sumber.</p>
    </div>
</div>


        <div class="col-md-10 mb-4">
            <div style="background-color: #E9EBF8; padding: 20px; border-radius: 0px; text-align: justify;">
                <div style="display: flex; align-items: center;">
                    <div style="margin-left: 100px;">
                        <h5 style="margin-bottom: 0;">Meningkatkan efisiensi</h5>
                        <h5>proses rekrutmen</h5>
                    </div>
                </div>
                <p style="margin-left: 550px; margin-bottom: 0; margin-top: -60px; margin-right: 100px;">Platform kami membantu perusahaan menghemat waktu dan tenaga dalam proses rekrutmen.</p>
            </div>
        </div>

        <div class="col-md-10 mb-4">
            <div style="background-color: #E9EBF8; padding: 20px; border-radius: 0px; text-align: justify;">
                <div style="display: flex; align-items: center;">
                    <div style="margin-left: 100px;">
                        <h5>Menemukan talenta terbaik</h5>
                        <h5>terbaik</h5>
                    </div>
                </div>
                <p style="margin-left: 550px; margin-bottom: 0; margin-top: -60px; margin-right: 100px;">Alat pencocokan canggih kami membantu perusahaan menemukan talenta terbaik yang sesuai dengan kebutuhan mereka.</p>
            </div>
        </div>

        <div class="col-md-10 mb-4">
            <div style="background-color: #E9EBF8; padding: 20px; border-radius: 0px; text-align: justify;">
                <div style="display: flex; align-items: center;">
                    <div style="margin-left: 100px;">
                        <h5>Membangun citra </h5>
                        <h5>perusahaan yang positif</h5>
                    </div>
                </div>
                <p style="margin-left: 550px; margin-bottom: 0; margin-top: -60px; margin-right: 100px;">Membuka lowongan di Link Kerjaku menunjukkan bahwa perusahaan Anda berkomitmen untuk menemukan talenta terbaik dan membangun masa depan pekerjaan yang lebih baik.</p>
            </div>
        </div>
    </div>
</div>
</section>
<!-- Section Akhir -->

<!-- Section Lagi -->
<section style="background-color: #FFFFFF; display: flex;">
<div style="width: 1555px; height: 300px; background-color: #1679AB; position: relative; color: #FFFFFF; padding: 20px;">
    <div style="position: absolute; top: 0; right: 0; width: 1235px; height: 300px; background-color: #FFC94A; border-top-right-radius: 355px; margin-right: 1115px;"></div>
    <div style="display: flex; justify-content: center; align-items: center; height: 100%;">
        <div style="max-width: 1000px; text-align: center; margin-left: 125px;">
            <p style="color: #FFFFFF; text-align: justify; margin: 0; font-size: 25px;">Mulai uji coba gratis Link Kerjaku hari ini dan temukan</p>
            <p style="color: #FFFFFF; text-align: justify; margin: 0; font-size: 25px;">kandidat yang sempurna untuk lowongan Anda</p>
        </div>
        <button style="background-color: #FFC94A; color: #000000; border: none; border-radius: 5px; padding: 10px 20px; font-size: 20px; margin-left: 20px; cursor: pointer; margin-left: 35px;">Uji Coba Gratis</button>
    </div>
</div>
</section>
<!-- Section Lagi -->


<!-- Tambahan Tampilan Baru Kelima  -->
<section style="background-color: #FFFFFF; padding: 55px;">
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

<!-- Section Baru Keenam -->
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
    <a href="/detailblog3" style="margin-bottom: 20px;">--></a>
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
    <a href="/detailblog3" style="margin-bottom: 20px;">--></a>
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
    <a href="/detailblog3" style="margin-bottom: 20px;">--></a>
</div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section Akhir -->

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




</script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
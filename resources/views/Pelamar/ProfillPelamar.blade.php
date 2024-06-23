<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Link-Kerjaku | Profill Pelamar</title>

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
                    <a class="nav-link active ms-4" aria-current="page" href="/HomePagePelamar" style="color: #000000;">Beranda</a>
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
        <div class="dropdown-item">
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
<section style="background-image: url('img/profillpelamar.jpg'); background-size: 1000px 500px; background-position: center; padding: 225px;">
</section>
<!-- Section Akhir -->

<!-- Section Kedua -->
<section style="background-color: #FFFFFF; padding: 50px;">
<div style="width: 155px; height: 155px; background-color: #A0A0A0; border-radius: 50%; margin-right: 125px; margin-top: -85px; margin-left: 100px; position: relative; overflow: hidden;">
    <img src="img/ProfilPelamar.jpg" alt="Gambar" style="width: 100%; height: 100%; object-fit: cover; border: 4px solid #1679AB; border-radius: 50%;">
</div>
    <div style="margin-top: -100px; margin-left: -25px; margin-bottom: 155px;">
            <h2 style="margin-top: 0; margin-left: 295px; color: #146D9A;">Stevano Gian</h2>
            <p style="margin-top: 0; margin-left: 300px;">Design UI/UX dan Marketing Research</p>
            <div style="display: flex; align-items: center; margin-left: 295px; margin-top: 10px;">
    <img src="svg/instagram.svg" alt="Instagram" style="width: 30px; height: 30px; filter: invert(53%) sepia(33%) saturate(2754%) hue-rotate(190deg) brightness(94%) contrast(91%);">
    <img src="svg/link.svg" alt="Link" style="width: 30px; height: 30px; margin-left: 20px; filter: invert(53%) sepia(33%) saturate(2754%) hue-rotate(190deg) brightness(94%) contrast(91%);">
    <img src="svg/facebook.svg" alt="Facebook" style="width: 30px; height: 30px; margin-left: 25px; filter: invert(53%) sepia(33%) saturate(2754%) hue-rotate(190deg) brightness(94%) contrast(91%);">
</div>


            <div style="margin-left: 1225px; margin-top: -100px;">
            <a href="/disimpan" style="display: inline-block; width: 120px; height: 40px; background-color: #FFC94A; border: none; border-radius: 8px; color: white; text-align: center; line-height: 40px; text-decoration: none;">
        Disimpan
    </a>        
</div>

        <div style="text-align: left; padding: 155px;">
        <h3 style="color: #146D9A;">Pengalaman</h3>
        <p>Special Design UI/UX, Marketing Reserch dan Digital Marketing</p>

        <div style="text-align: left; margin-top: 115px;">
        <h3 style="color: #146D9A;">Tentang Saya</h3>
        <p>Saya Olivia Rhye adalah seorang profesional yang ahli dalam Special Design UI/UX, Marketing Research, dan Digital Marketing. Dengan keahlian saya dalam desain yang menarik dan penelitian pasar yang teliti, serta kemampuan saya dalam strategi pemasaran digital, saya menghadirkan solusi-solusi yang efisien dan memikat dalam dunia digital. Saya berfokus pada kualitas dan inovasi, 
            dan saya selalu berusaha untuk menciptakan pengalaman pengguna yang luar biasa.</p>
            <a href="#" style="text-decoration: none; color: #000000; font-weight: bold;">
    Read more
    </a>
            </div>

            <div style="text-align: left; margin-top: 95px;">
        <h3 style="color: #146D9A;">Ringkasan Pribadi</h3>
        <p>Tambahkan Ringkasan pribadi ke profil untuk memperkenalkan diri anda.</p>
        <a href="#" class="btn" role="button" style="background-color: #FFC94A;">Tambahkan ringkasan</a>
            </div>

            <div style="text-align: left; margin-top: 95px;">
        <h3 style="color: #146D9A;">Riwayat Karier</h3>
        <p>Semakin Anda memberikan tahu perusahaan mengenai pengalama anda 
semakin anda menonjol
</p>
        <a href="#" class="btn" role="button" style="background-color: #FFC94A;">Tambahkan ringkasan</a>
            </div>

            <div style="text-align: left; margin-top: 95px;">
        <h3 style="color: #146D9A;">Pendidikan</h3>
        <p>Beri tahu perusahaan mengenai Pendidikan anda</p>
        <a href="#" class="btn" role="button" style="background-color: #FFC94A;">Tambahkan ringkasan</a>
            </div>

            <div style="text-align: left; margin-top: 95px;">
        <h3 style="color: #146D9A;">Lisensi & Sertifikasi</h3>
        <p>Tunjukkan kredesial Profesional Anda. Tambahkan Lisensi, Sertifkat, keanggotaan, Dan akreditasi anda yang relevan disiini</p>
        <a href="#" class="btn" role="button" style="background-color: #FFC94A;">Tambahkan ringkasan</a>
            </div>

            <div style="text-align: left; margin-top: 95px;">
        <h3 style="color: #146D9A;">Keahlian</h3>
        <p>Beri tahu perusahaan betapa berharganya Anda bagi mereka.</p>
        <a href="#" class="btn" role="button" style="background-color: #FFC94A;">Tambahkan ringkasan</a>
            </div>

            <div style="text-align: left; margin-top: 95px;">
        <h3 style="color: #146D9A;">Bahasa</h3>
        <p>Tambahkan bahasa untuk menarik lebih banyak perusahaan dan pemberi kerja.</p>
        <a href="#" class="btn" role="button" style="background-color: #FFC94A;">Tambahkan ringkasan</a>
            </div>

            <div style="text-align: left; margin-top: 95px; margin-left: 175px;">
        <h3 style="margin-left: -95px; color: #146D9A;">Resume</h3>

        <div class="card" style="width: 955px; height: 255px; border: 1px solid #808080; border-radius: 20px; margin-top: 20px; margin-left: -100px;">
    <div style="padding: 20px;">
        <p style="margin-top: 15px;">Tambahkan bahasa untuk menarik lebih banyak perusahaan dan pemberi kerja</p>
        <a href="#" class="btn" role="button" style="background-color: #FFC94A;">Tambahkan ringkasan</a>
        <hr style="border: 1px solid black; margin-top: 25px;">
        <p style="margin-top: 15px;">Tambahkan bahasa untuk menarik lebih banyak perusahaan dan pemberi kerja</p>
        <a href="#" class="btn" role="button" style="background-color: #FFC94A;">Tambahkan ringkasan</a>
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


</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
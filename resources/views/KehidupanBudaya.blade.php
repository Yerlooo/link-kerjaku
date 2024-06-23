<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
    .text-left {
  text-align: left;
}

.text-justify {
  text-align: justify;
}

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

    <title>Link-Kerjaku | Detail Perusahaan</title>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
    <a class="navbar-brand" href="/">
        <img src="img/logo2.png" alt="Logo" style="height: 40px;">
    </a> 
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active ms-4" aria-current="page" href="/HomePagePelamar" style="color: #146D9A;">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active ms-4" aria-current="page" href="/lowongankerja" style="color: #082A3C;">Lowongan Kerja</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active ms-4" aria-current="page" href="/about2" style="color: #082A3C;">Tentang Kami</a>
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
<section style="background-color: #FFFFFF; padding: 5px; display: flex; align-items: center; justify-content: right;">
<div style="margin-right: 100px;">
</div>
</section>
<img src="img/detailperusahaan.jpg" alt="Profile Image" style="width: 100%; height: auto;">
<!-- Section Akhir -->

<!-- Section Kedua -->
<section class="bg-light">
  <div class="container py-5">
    <div class="row">
      <div class="col-md-3">
        <img src="img/nsg.png" alt="Nusantara Sakti Group" class="img-fluid" width="50%">
      </div>
      <div class="col-md-10 mb-1">
        <h2 class="mb-4">Nusantara Sakti Group</h2>
        <div class="d-flex align-items-center mb-1">
  <div>
    <span style="color: #E05821; font-size: 35px;">★</span>
    <span style="color: #E05821; font-size: 35px;">★</span>
    <span style="color: #E05821; font-size: 35px;">★</span>
    <span style="color: #E05821; font-size: 35px;">★</span>
    <span style="color: #E05821; font-size: 35px;">☆</span>
  </div>
  <span style="font-size: 20px; margin-left: 45px;">4.2 peringkat total dari</span>
  <span style="font-size: 20px; margin-left: 45px; border-bottom: 1px solid black;">429 review</span>
</div>

<div class="mb-4" style="margin-top: 25px;">
  <a href="/DetailPerusahaan" style="text-decoration: none; color: black;">
    <span id="about" style="font-size: 20px; margin-right: 20px;">Tentang</span>
  </a>
  <a href="/Kehidupan&Budaya" style="text-decoration: none; color: black;">
    <span id="life" style="font-size: 20px; margin-right: 20px; color: #1E47A9;">Kehidupan dan Budaya</span>
  </a>
  <a href="/Pekerjaan" style="text-decoration: none; color: black;">
    <span id="jobs" style="font-size: 20px; margin-right: 20px;">Pekerjaan</span>
  </a>
  <hr id="underline" style="border-color: 1E47A9;">
</div>


  <h3 style="margin-bottom: 25px;">Keuntungan Dan Manfaat</h3>
  <div style="display: flex; flex-direction: column; align-items: center; margin-top: 55px;">
    <div style="display: flex; justify-content: space-around; width: 100%; margin-bottom: 20px;">
        <div style="text-align: center;">
            <img src="svg/gift.svg" alt="Medical" width="100" height="100">
            <h6>Medical</h6>
        </div>
        <div style="text-align: center; margin-right: 755px; margin-left: 100px;">
            <img src="svg/gift.svg" alt="Tunjangan lain-lain" width="100" height="100">
            <h6>Tunjangan lain-lain</h6>
        </div>
    </div>
    <div style="display: flex; justify-content: space-around; width: 100%;">
        <div style="text-align: center;">
            <img src="svg/gift.svg" alt="Dental" width="100" height="100">
            <h6>Dental</h6>
        </div>
        <div style="text-align: center; margin-right: 755px; margin-left: 100px;">
            <img src="svg/gift.svg" alt="Sports (e.g. Gym)" width="100" height="100">
            <h6>Sports (e.g. Gym)</h6>
        </div>
    </div>
</div>

<h3 style="margin-top: 35px;">Mengapa bergabung dengan kami?</h3>


<div style="margin-top: 25px;">
  <p class="text-justify">PENGHARGAAN:</p>
  <p class="text-justify">2017 : Multifinance dengan predikat "Sangat Bagus" atas kinerja keuangan (InfoBank)</p>
  <p class="text-justify">2017 : Perusahaan Multifinance dengan Kinerja Unggul (Warta Ekonomi)</p>
  <p class="text-justify">2018 : Kinerja Keuangan Sangat Bagus untuk Aset Perusahaan Multifinance antara 2,5 - 5 T (Warta Ekonomi)</p>
  <p class="text-justify">2019 : Kinerja Keuangan Sangat Bagus untuk Aset Perusahaan Multifinance antara 2,5 - 10 T (Warta Ekonomi)</p>
  <p class="text-justify">Perusahaan dengan Market Share Terbesar di Indonesia</p>
  <p class="text-justify">Perusahaan yang memiliki banyak Lini Bisnis</p>
  <p class="text-justify">Perusahaan yang berkembang</p>
  <p class="text-justify">Perusahaan yang memiliki 1000 Cabang tersebar di seluruh Indonesia</p>
  <p class="text-justify">Perusahaan dengan Jenjang Karir yang terbuka</p>
  <p class="text-justify">Salary yang Kompetitif</p>
  <p class="text-justify">Perusahaan dengan Budaya Kekeluargaan dan Sinergitas yang tinggi</p>
</div>

</div>
      </div>
    </div>
  </div>
</section>
<!-- Akhir Section Kedua -->

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
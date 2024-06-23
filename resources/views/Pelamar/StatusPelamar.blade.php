<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Link-Kerjaku | Status Pelamar</title>
    
<style>
    .text-clickable {
    cursor: pointer;
}

.text-clickable:hover {
    color: #82C1F9;
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
                    <a class="nav-link active ms-4" aria-current="page" href="/HomePagePerusahaan" style="color: #082A3C;">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active ms-4" aria-current="page" href="/StatusPelamar" style="color: #146D9A">Status Pelamar</a>
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
<section style="background-color: #146D9A; padding: 50px;">
<div class="col" style="margin-left: 25px;">
<select class="select" aria-label="Default select example" style="width: 250px; height: 40px; margin-left: 50px; margin-top: 25px; background-color: #146D9A; border: none; color: #FFFFFF;">
<option style="color: #FFFFFF;" selected>Software Engineer</option>
  <option style="color: #FFFFFF;" value="1">Backend</option>
  <option style="color: #FFFFFF;" value="2">UI/UX</option>
  <option style="color: #FFFFFF;" value="3">Digital Marketing</option>
</select>

</div>

<div style="display: flex; justify-content: space-between; margin-top: 45px; margin-left: 100px; color: #FFFFFF;">
    <span class="text-clickable" style="margin-left: 55px;">Semua Pelamar</span>
    <span style="margin-right: 45px;" class="text-clickable">Belum dibaca</span>
    <span style="margin-right: 75px;" class="text-clickable">Sudah dibaca</span>
    <span style="margin-right: 100px;" class="text-clickable">Ditolak</span>
    <span style="margin-left: 5px; margin-right: 220px;" class="text-clickable">Disimpan</span>
</div>
</section>
<!-- Section Akhir -->

<!-- Section Kedua -->
<section style="background-color: #E8F2F7; padding: 50px;">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h6>Menampilkan 6 Pelamar</h6>
            </div>
            <div class="col-md-6" style="margin-top: -15px;">
    <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Cari Pelamar" aria-label="Search" style="padding-right: 30px; background-image: url('svg/search.svg'); background-repeat: no-repeat; background-position: calc(100% - 10px) center; background-color: #E8F2F7;">
    </form>
</div>

        </div>
    </div>


    <div class="card" id="jobCard" style="width: 1120px; height: 225px; background-color: #FFFFFF; margin-top: 45px; border-radius: 20px; margin-left: 145px;">
    <img src="img/pelamar1.jpg" class="card-img-top" alt="Card Image" style="width: 187px; height: 158px; background-color: #D9D9D9; margin-top: 35px; margin-left: 35px;">
    <div class="card-body">
        <h6 class="card-title" style="margin-left: 250px; margin-top: -120px;">Nia, Digital Marketing</h6>
        <div style="display: flex; align-items: center;">
            <img src="svg/location.svg" alt="Icon 1" style="width: 30px; height: 30px; margin-left: 250px; margin-top: 25px;">
            <p style="margin-left: 20px; margin-top: 35px;">Bandung</p>
            <img src="svg/date.svg" alt="Icon 2" style="width: 30px; height: 30px; margin-left: 125px; margin-top: 25px;">
            <p style="margin-left: 20px; margin-top: 40px;">1 hari yang lalu</p>
            <img src="svg/bag.svg" alt="Icon 2" style="width: 30px; height: 30px; margin-left: 125px; margin-top: 25px;">
            <p style="margin-left: 20px; margin-top: 40px;">2 tahun</p>
        </div>
    </div>
</div>

<div class="card" id="jobCard2" style="width: 1120px; height: 225px; background-color: #FFFFFF; margin-top: 45px; border-radius: 20px; margin-left: 145px;">
    <img src="img/pelamar2.jpg" class="card-img-top" alt="Card Image" style="width: 187px; height: 158px; background-color: #D9D9D9; margin-top: 35px; margin-left: 35px;">
    <div class="card-body">
        <h6 class="card-title" style="margin-left: 250px; margin-top: -120px;">Reni , Manajemen</h6>
        <div style="display: flex; align-items: center;">
    <img src="svg/location.svg" alt="Icon 1" style="width: 30px; height: 30px; margin-left: 250px; margin-top: 25px;">
    <p style="margin-left: 20px; margin-top: 35px;">Jakarta</p>
    <img src="svg/date.svg" alt="Icon 2" style="width: 30px; height: 30px; margin-left: 125px; margin-top: 25px;">
    <p style="margin-left: 20px; margin-top: 40px;">1 hari yang lalu</p>
    <img src="svg/bag.svg" alt="Icon 2" style="width: 30px; height: 30px; margin-left: 125px; margin-top: 25px;">
    <p style="margin-left: 20px; margin-top: 40px;">2 tahun</p>
</div>
    </div>
</div>

<div class="card" id="jobCard3" style="width: 1120px; height: 225px; background-color: #FFFFFF; margin-top: 45px; border-radius: 20px; margin-left: 145px;">
    <img src="img/pelamar3.jpg" class="card-img-top" alt="Card Image" style="width: 187px; height: 158px; background-color: #D9D9D9; margin-top: 35px; margin-left: 35px;">
    <div class="card-body">
        <h6 class="card-title" style="margin-left: 250px; margin-top: -120px;">Deni , Web Developer</h6>
        <div style="display: flex; align-items: center;">
    <img src="svg/location.svg" alt="Icon 1" style="width: 30px; height: 30px; margin-left: 250px; margin-top: 25px;">
    <p style="margin-left: 20px; margin-top: 35px;">Bogor</p>
    <img src="svg/date.svg" alt="Icon 2" style="width: 30px; height: 30px; margin-left: 125px; margin-top: 25px;">
    <p style="margin-left: 20px; margin-top: 40px;">2 hari yang lalu</p>
    <img src="svg/bag.svg" alt="Icon 2" style="width: 30px; height: 30px; margin-left: 125px; margin-top: 25px;">
    <p style="margin-left: 20px; margin-top: 40px;">2 tahun</p>
</div>
    </div>
</div>

<div class="card" id="jobCard4" style="width: 1120px; height: 225px; background-color: #FFFFFF; margin-top: 45px; border-radius: 20px; margin-left: 145px;">
    <img src="img/pelamar4.jpg" class="card-img-top" alt="Card Image" style="width: 187px; height: 158px; background-color: #D9D9D9; margin-top: 35px; margin-left: 35px;">
    <div class="card-body">
        <h6 class="card-title" style="margin-left: 250px; margin-top: -120px;">Aldo  , Data Analyst</h6>
        <div style="display: flex; align-items: center;">
    <img src="svg/location.svg" alt="Icon 1" style="width: 30px; height: 30px; margin-left: 250px; margin-top: 25px;">
    <p style="margin-left: 20px; margin-top: 35px;">Lampung</p>
    <img src="svg/date.svg" alt="Icon 2" style="width: 30px; height: 30px; margin-left: 125px; margin-top: 25px;">
    <p style="margin-left: 20px; margin-top: 40px;">2 hari yang lalu</p>
    <img src="svg/bag.svg" alt="Icon 2" style="width: 30px; height: 30px; margin-left: 125px; margin-top: 25px;">
    <p style="margin-left: 20px; margin-top: 40px;">2 tahun</p>
</div>
    </div>
</div>

<div class="card" id="jobCard5" style="width: 1120px; height: 225px; background-color: #FFFFFF; margin-top: 45px; border-radius: 20px; margin-left: 145px;">
    <img src="img/pelamar5.jpg" class="card-img-top" alt="Card Image" style="width: 187px; height: 158px; background-color: #D9D9D9; margin-top: 35px; margin-left: 35px;">
    <div class="card-body">
        <h6 class="card-title" style="margin-left: 250px; margin-top: -120px;">Kyla , Digital Marketing</h6>
        <div style="display: flex; align-items: center;">
    <img src="svg/location.svg" alt="Icon 1" style="width: 30px; height: 30px; margin-left: 250px; margin-top: 25px;">
    <p style="margin-left: 20px; margin-top: 35px;">Surabaya</p>
    <img src="svg/date.svg" alt="Icon 2" style="width: 30px; height: 30px; margin-left: 125px; margin-top: 25px;">
    <p style="margin-left: 20px; margin-top: 40px;">3 hari yang lalu</p>
    <img src="svg/bag.svg" alt="Icon 2" style="width: 30px; height: 30px; margin-left: 125px; margin-top: 25px;">
    <p style="margin-left: 20px; margin-top: 40px;">2 tahun</p>
</div>
    </div>
</div>

<div class="card" id="jobCard6" style="width: 1120px; height: 225px; background-color: #FFFFFF; margin-top: 45px; border-radius: 20px; margin-left: 145px;">
    <img src="img/pelamar6.jpg" class="card-img-top" alt="Card Image" style="width: 187px; height: 158px; background-color: #D9D9D9; margin-top: 35px; margin-left: 35px;">
    <div class="card-body">
        <h6 class="card-title" style="margin-left: 250px; margin-top: -120px;">Sinta , Digital Marketing</h6>
        <div style="display: flex; align-items: center;">
    <img src="svg/location.svg" alt="Icon 1" style="width: 30px; height: 30px; margin-left: 250px; margin-top: 25px;">
    <p style="margin-left: 20px; margin-top: 35px;">Be</p>
    <img src="svg/date.svg" alt="Icon 2" style="width: 30px; height: 30px; margin-left: 125px; margin-top: 25px;">
    <p style="margin-left: 20px; margin-top: 40px;">3 hari yang lalu</p>
    <img src="svg/bag.svg" alt="Icon 2" style="width: 30px; height: 30px; margin-left: 125px; margin-top: 25px;">
    <p style="margin-left: 20px; margin-top: 40px;">2 tahun</p>
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
document.getElementById('jobCard').addEventListener('click', function() {
    Swal.fire({
        title: 'Apakah Anda ingin melihat Profil Pelamar ini?',
        icon: 'question',
        showCancelButton: true,
        confirmButtonText: 'Ya',
        cancelButtonText: 'Tidak'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = '/PopUpStatus';
        } else {
            Swal.fire('Baiklah', '', 'info');
        }
    });
});

document.getElementById('jobCard2').addEventListener('click', function() {
    Swal.fire({
        title: 'Apakah Anda ingin melihat Profil Pelamar ini?',
        icon: 'question',
        showCancelButton: true,
        confirmButtonText: 'Ya',
        cancelButtonText: 'Tidak'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = '/PopUpStatus';
        } else {
            Swal.fire('Baiklah', '', 'info');
        }
    });
});

document.getElementById('jobCard3').addEventListener('click', function() {
    Swal.fire({
        title: 'Apakah Anda ingin melihat Profil Pelamar ini?',
        icon: 'question',
        showCancelButton: true,
        confirmButtonText: 'Ya',
        cancelButtonText: 'Tidak'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = '/PopUpStatus';
        } else {
            Swal.fire('Baiklah', '', 'info');
        }
    });
});

document.getElementById('jobCard4').addEventListener('click', function() {
    Swal.fire({
        title: 'Apakah Anda ingin melihat Profil Pelamar ini?',
        icon: 'question',
        showCancelButton: true,
        confirmButtonText: 'Ya',
        cancelButtonText: 'Tidak'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = '/PopUpStatus';
        } else {
            Swal.fire('Baiklah', '', 'info');
        }
    });
});

document.getElementById('jobCard5').addEventListener('click', function() {
    Swal.fire({
        title: 'Apakah Anda ingin melihat Profil Pelamar ini?',
        icon: 'question',
        showCancelButton: true,
        confirmButtonText: 'Ya',
        cancelButtonText: 'Tidak'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = '/PopUpStatus';
        } else {
            Swal.fire('Baiklah', '', 'info');
        }
    });
});

document.getElementById('jobCard6').addEventListener('click', function() {
    Swal.fire({
        title: 'Apakah Anda ingin melihat Profil Pelamar ini?',
        icon: 'question',
        showCancelButton: true,
        confirmButtonText: 'Ya',
        cancelButtonText: 'Tidak'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = '/PopUpStatus';
        } else {
            Swal.fire('Baiklah', '', 'info');
        }
    });
});

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

@include('sweetalert::alert')

<!-- SweetAlert CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

<!-- SweetAlert JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
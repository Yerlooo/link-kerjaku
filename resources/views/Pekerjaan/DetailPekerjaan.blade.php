<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Link-Kerjaku | Detail Pekerjaan</title>


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
<section style="background-color: #FFFFFF; padding: 40px;">
    <h5 style="text-align: left; margin-left: 70px;">Digital Marketing
    <img src="svg/Save.svg" alt="Icon" style="width: 35px; height: 35px; float: right; margin-right: 85px;">
    <img src="svg/Share.svg" alt="Icon" style="width: 35px; height: 35px; float: right; margin-right: 85px;">
</h5>
    <h6 style="margin-left: 85px; margin-top: 30px;">Perusahaan Google
        <img src="svg/location.svg" alt="Icon" style="width: 30px; height: 30px; margin-left: 155px;">
        <span>Jakarta</span>
        <img src="svg/date.svg" alt="Icon" style="width: 30px; height: 30px; margin-left: 155px;">
        <span>3 hari yang lalu</span>
</h6>

    <h6 style="text-align: left; margin-left: 70px; margin-top: 35px;">Gaji <span style="float: right; margin-right: 855px;">Rp5.000.000 - Rp7.000.000 per bulan (tergantung pengalaman)</span></h6>
    <h6 style="text-align: left; margin-left: 70px; margin-top: 35px;">Benefit  
    <ul style="margin-top: 5px; margin-left: 65px; margin-top: -20px;">
        <li>Asuransi kesehatan dan jiwa</li>
        <li>Tunjangan makan</li>
        <li>Dana pensiun</li>
        <li>Cuti tahunan 15 hari</li>
        <li>Bonus kinerja tahunan</li>
        <li>Peluang pengembangan karir melalui pelatihan dan workshop</li>
        <li>Fasilitas kantor yang nyaman (ruang gym, ruang istirahat)</li>
        <li>BWork-life balance yang diutamakan</li>
    </ul>
    <div style="float: right; margin-right: 125px; margin-top: -100px;">
        <img src="img/google.jpg" alt="Card Gambar" style="width: 100px; height: 100px; margin-right: 55px;">
    </div>
</h6>

<hr style="margin-left: 70px; margin-top: 25px;">

<h5 style="margin-right: 155px; margin-top: 50px; text-align: justify; margin-left: 70px;">Deskripsi Pekerjaan</h5>
    <p style="margin-right: 155px; margin-top: 1px; text-align: justify; margin-left: 70px;">Menganalisis data dan metrik pemasaran digital untuk mengukur efektivitas campaign dan memberikan rekomendasi untuk optimasi.
Spesialis SEO: Membantu bisnis meningkatkan peringkat website mereka di hasil pencarian Google melalui strategi SEO (Search Engine Optimization).</p>

    <h5 style="margin-right: 155px; margin-top: 50px; text-align: left; margin-left: 70px;">Persyaratan Pekerjaan</h5>

    <h6 style="text-align: left; margin-left: 70px; margin-top: 35px;">Kualifikasi:</h6>
    <ul style="margin-left: 70px; margin-top: 15px;">
        <li>[Pendidikan] (misalnya, S1 [Jurusan])</li>
        <li>[Pengalaman] (misalnya, [Jumlah] tahun pengalaman di [Bidang])</li>
        <li>[Keterampilan] (misalnya, [Keterampilan Teknis], [Keterampilan Soft Skills])</li>
    </ul>

    <h6 style="text-align: left; margin-left: 70px; margin-top: 35px;">Persyaratan Tambahan (Opsional):</h6>
    <ul style="margin-left: 70px; margin-top: 15px;">
        <li>[Sertifikasi] (misalnya, [Nama Sertifikasi])</li>
        <li>[Bahasa] (misalnya, Bahasa Inggris [Tingkat Kemampuan])</li>
        <li>[Portofolio]</li>
    </ul>

    <h5 style="margin-right: 155px; margin-top: 95px; text-align: left; margin-left: 65px;">Cara Melamar</h5>
<div style="display: flex; align-items: justify; margin-top: 25px; margin-left: 45px;">
    <img src="svg/pin.svg" alt="Icon" style="width: 30px; height: 30px; margin-left: 10px; filter: invert(21%) sepia(67%) saturate(4447%) hue-rotate(180deg) brightness(91%) contrast(101%);">
    <h6 style="margin-left: 10px; margin-top: 3px;">Buat CV dan surat lamaran yang menarik.</h6>
</div>
<div style="display: flex; align-items: justify; margin-top: 25px;  margin-left: 45px;">
    <img src="svg/pin.svg" alt="Icon" style="width: 30px; height: 30px; margin-left: 10px; filter: invert(21%) sepia(67%) saturate(4447%) hue-rotate(180deg) brightness(91%) contrast(101%);">
    <h6 style="margin-left: 10px; margin-top: 3px;">Klik "Lamar Sekarang" dan ikuti instruksi.</h6>
</div>
<div style="display: flex; align-items: justify; margin-top: 25px;  margin-left: 45px;">
    <img src="svg/pin.svg" alt="Icon" style="width: 30px; height: 30px; margin-left: 10px; filter: invert(21%) sepia(67%) saturate(4447%) hue-rotate(180deg) brightness(91%) contrast(101%);">
    <h6 style="margin-left: 10px; margin-top: 3px;">Lamar sebelum batas waktu berakhir.</h6>
</div>

<h6 style="text-align: left; margin-left: 70px; margin-top: 35px;">Batas Waktu Lamaran:</h6>
    <ul style="margin-left: 70px; margin-top: 15px;">
        <li>Sebutkan tanggal batas waktu lamaran.</li>
    </ul>

    <div style="display: flex; justify-content: center; margin-top: 20px;">
    <a href="/LamarPekerjaan" style="width: 240px; height: 58px; border-radius: 5px; display: inline-block; text-align: center; line-height: 58px; color: white; text-decoration: none; background-color: #FFC94A; color: #000000;">
  Lamar Sekarang
</a>
</div>

<hr style="margin-left: 70px; margin-top: 25px;">

<h5 style="margin-right: 155px; margin-top: 40px; text-align: center; margin-left: 165px;">Informasi Lebih Lanjut</h5>
<div style="text-align: center; margin-top: 20px">
<button style="background-color: #FFC94A; width: 240px; height: 58px; margin-right: 20px; border: none; border-radius: 5px; color: #000000;">Hubungi Kami Sekarang</button>
<a href="/DetailPerusahaan" style="width: 240px; height: 58px; border-radius: 5px; display: inline-block; text-align: center; line-height: 58px; color: white; text-decoration: none; border: 2px solid #FFC94A; color: #000000;">
  Detail Perusahaan
</a>

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
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Link-Kerjaku | Detail Blog</title>

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
                    <a class="nav-link active ms-4" aria-current="page" href="/HomePagePelamar" style="color: #082A3C;">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active ms-4" aria-current="page" href="/lowongankerja" style="color: #082A3C;">Lowongan Kerja</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active ms-4" aria-current="page" href="/about2" style="color: blue;">Tentang Kami</a>
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
        <div class="dropdown-item">
            <img src="svg/logout.svg" alt="Logout Icon" class="dropdown-icon">
            Logout
        </div>
    </div>
</div>

        </div>
    </div>
</nav>

<!-- Section Pertama -->
<section style="background-color: #1679AB; padding: 70px; display: flex; align-items: center; justify-content: left;">
<div style="margin-right: 35px; text-align: left; margin-left: 55px;">
    <h3 style="color: white;">Menuju Sukses: Panduan Lengkap untuk Pencari Kerja</h3>
    <p style="color: white;">Temukan tips, trik, dan strategi untuk membantumu melangkah di dunia kerja</p>
</div>

</section>
<!-- Section Akhir -->

<!-- Section Baru -->
<section style="background-color: #FFFFFF; padding: 20px;">
<div style="display: flex; justify-content: center; align-items: center; margin-top: -55px;">
    <div class="card" style="width: 1351px; height: 502px; border-radius: 24px; overflow: hidden;">
        <img src="img/detailblog.jpg" alt="Panduan Lengkap" style="width: 100%; height: 100%; object-fit: cover;">
    </div>
</div>
</section>
<!-- Section Akhir -->

<!-- Section Baru -->
<section style="background-color: #FFFFFF; padding: 20px;">
    <div style="margin-left: 255px; text-align: justify; margin-top: 55px; margin-right: 235px;">
        <p>Mencari kerja bisa menjadi proses yang penuh tantangan, tapi jangan khawatir! Blog ini hadir untuk membantumu menavigasi proses ini dengan lebih mudah dan percaya diri. Di sini, kamu akan menemukan berbagai tips, trik, dan strategi yang telah terbukti efektif untuk membantumu mendapatkan pekerjaan impian.</p>
    </div>

    <div style="margin-left: 255px; text-align: justify; margin-top: 55px; margin-right: 235px;">
        <h5>1. Persiapan Diri</h5>
        <p>Kenali Diri Sendiri : Luangkan waktu untuk memahami minat, bakat, dan nilai-nilai yang kamu miliki. Ini akan membantumu menentukan jenis pekerjaan yang tepat untukmu.</p>
        <p style="margin-top: 35px;">Riset Pekerjaan : Lakukan riset mendalam tentang lowongan pekerjaan yang kamu minati. Pelajari tentang perusahaan, budaya kerja, dan kualifikasi yang dibutuhkan.</p>
        <p style="margin-top: 35px;">Siapkan CV dan Surat Lamaran : Buatlah CV dan surat lamaran yang menarik dan profesional. Pastikan CV dan surat lamaran tersebut sesuai dengan lowongan pekerjaan yang kamu lamar.</p>
        <p style="margin-top: 35px;">Berlatih Interview : Berlatihlah menjawab pertanyaan interview yang umum. Semakin terlatih, semakin percaya diri kamu saat interview.</p>
    </div>

    <div style="margin-left: 255px; text-align: justify; margin-top: 55px; margin-right: 235px;">
        <h5>2. Mencari Lowongan Pekerjaan</h5>
        <p>Manfaatkan Situs Pencari Kerja : Gunakan situs pencari kerja seperti Jobstreet, Indeed, atau LinkedIn untuk menemukan lowongan pekerjaan yang sesuai.</p>
        <p style="margin-top: 35px;">Gunakan Media Sosial : Ikuti akun media sosial perusahaan yang kamu minati. Mereka seringkali mengumumkan lowongan pekerjaan di media sosial.</p>
        <p style="margin-top: 35px;">Hadiri Job Fair : Job fair adalah kesempatan yang baik untuk bertemu dengan banyak perusahaan dan mencari lowongan pekerjaan secara langsung.</p>
        <p style="margin-top: 35px;">Bangun Jaringan : Bangunlah jaringan dengan orang-orang di bidang yang kamu minati. Mereka mungkin bisa memberikan informasi tentang lowongan pekerjaan yang tidak dipublikasikan.</p>
    </div>

    <div style="margin-left: 255px; text-align: justify; margin-top: 55px; margin-right: 235px;">
        <h5>3. Mengikuti Proses Lamaran</h5>
        <p>Kirim Lamaran : Kirim lamaran pekerjaanmu sesegera mungkin setelah kamu menemukan lowongan yang sesuai.</p>
        <p style="margin-top: 35px;">Ikuti Tes : Jika kamu diminta untuk mengikuti tes, persiapkan diri dengan baik. Ada banyak sumber daya online yang bisa membantumu berlatih.</p>
        <p style="margin-top: 35px;">Interview : Saat interview, tunjukkan antusiasme dan profesionalisme. Berikan jawaban yang jelas dan ringkas, dan jangan lupa untuk bertanya.</p>
    </div>

    <div style="margin-left: 255px; text-align: justify; margin-top: 55px; margin-right: 235px;">
        <h5>4. Tips Tambahan</h5>
        <p>Tetap Termotivasi : Mencari kerja membutuhkan waktu dan usaha. Tetaplah termotivasi dan jangan mudah menyerah.</p>
        <p style="margin-top: 35px;">Terbuka untuk Peluang Baru : Jangan hanya terpaku pada satu jenis pekerjaan. Terbukalah untuk mencoba peluang baru yang sesuai dengan minat dan bakatmu.</p>
        <p style="margin-top: 35px;">Belajar dari Pengalaman : Setiap proses lamaran pekerjaan adalah pengalaman belajar. Gunakan pengalamanmu untuk meningkatkan kemampuanmu di masa depan.</p>
        <p style="margin-top: 35px;">Mencari kerja bukan hal yang mudah, tapi dengan persiapan yang matang dan strategi yang tepat, kamu bisa meningkatkan peluangmu untuk mendapatkan pekerjaan impian. Ingatlah untuk selalu percaya diri dan pantang menyerah.</p>
        <hr style="border: 1px solid black; margin-top: 125px;">
        <p style="margin-top: 10px; text-align: center;">Berlangganan blog ini untuk mendapatkan tips dan informasi terbaru seputar dunia kerja.</p>
        <p style="margin-top: -10px; text-align: center;">Bagikan blog ini kepada teman-temanmu yang sedang mencari kerja.</p>
    </div>

    <hr style="border: 4px solid #FFC94A; margin-top: 55px;">

    <div style="width: 85px; height: 85px; background-color: #ccc; border-radius: 50%; overflow: hidden; display: flex; justify-content: center; align-items: center; margin-left: 354px; margin-top: 30px;">
        <img src="img/clara.jpg" alt="Profile Image" style="width: 100%; height: 100%; object-fit: cover;">
    </div>
    <div style="margin-left: 455px; margin-top: -65px;">
        <h2 style="margin: 0; font-size: 24px;">Clara Claire</h2>
        <p style="margin: 5px 0 0 0; color: gray; font-size: 14px;">3 hours ago</p>
        <p style="margin: 5px 0 0 0; color: gray; font-size: 14px; margin-top: 35px; margin-right: 345px;">Link Kerjaku sangat membantu saya dalam menemukan pekerjaan yang sesuai dengan minat dan kualifikasi saya. Proses lamarannya juga mudah dan cepat. Terima kasih Link Kerjaku!</p>
    </div>

    <div style="width: 85px; height: 85px; background-color: #ccc; border-radius: 50%; overflow: hidden; display: flex; justify-content: center; align-items: center; margin-left: 354px; margin-top: 55px;">
        <img src="img/clara.jpg" alt="Profile Image" style="width: 100%; height: 100%; object-fit: cover;">
    </div>
    <div style="margin-left: 455px; margin-top: -65px;">
        <h2 style="margin: 0; font-size: 24px;">Clara Claire</h2>
        <p style="margin: 5px 0 0 0; color: gray; font-size: 14px;">3 hours ago</p>
        <p style="margin: 5px 0 0 0; color: gray; font-size: 14px; margin-top: 35px; margin-right: 345px;">Link Kerjaku sangat membantu saya dalam menemukan pekerjaan yang sesuai dengan minat dan kualifikasi saya. Proses lamarannya juga mudah dan cepat. Terima kasih Link Kerjaku!</p>
    </div>

    <p style="margin-top: 55px; text-align: center; margin-left: 55px;">Tinggalkan komentar di bawah ini untuk membagikan pengalamanmu dalam mencari kerja.</p>
    
    <textarea placeholder="Komentar" style="width: 872px; height: 210px; border-radius: 8px; border: 1px solid #0000FF; margin-top: 20px; padding: 10px; margin-left: 300px;"></textarea>

    <button style="width: 100px; height: 40px; background-color: #FFC94A; border: none; border-radius: 8px; color: white; margin-top: 5px; display: block; margin-left: 1065px;">Kirim</button>
</section>
<!-- Section Akhir -->

<!-- Section Kedua -->
<section style="background-color: #126189; padding: 50px 0;">
    <div class="container text-center">
        <h3 style="color: white;">Postingan Terbaru</h3>
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


        <div style="display: flex; align-items: center; margin-left: 20px; margin-bottom: -65px; margin-top: -15px;">
    <h5 style="margin: 0; text-align: left; margin-top: 10px;">Menuju Sukses : Panduan Lengkap untuk Pencari Kerja</h5>
</div>

<div style="display: flex; align-items: center; margin-left: 20px; margin-top: 95px; margin-bottom: 5px;">
    <p style="margin-right: 15px;">Lihat detail</p>
    <a href="https://linkkerjaku.wixsite.com/link-kerjaku/post/membuka-pintu-peluang-karir-dengan-link-kerjaku-portal-pekerjaan-terpercaya-untuk-masa-depan-anda" style="margin-bottom: 20px;">--></a>
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


        <div style="display: flex; align-items: center; margin-left: 20px; margin-bottom: -65px; margin-top: -15px;">
    <h5 style="margin: 0; text-align: left; margin-top: 10px;">Menuju Sukses : Panduan Lengkap untuk Pencari Kerja</h5>
</div>

<div style="display: flex; align-items: center; margin-left: 20px; margin-top: 95px; margin-bottom: 5px;">
    <p style="margin-right: 15px;">Lihat detail</p>
    <a href="https://linkkerjaku.wixsite.com/link-kerjaku/post/bagaimana-cara-untuk-mengubah-karier" style="margin-bottom: 20px;">--></a>
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


        <div style="display: flex; align-items: center; margin-left: 20px; margin-bottom: -65px; margin-top: -15px;">
    <h5 style="margin: 0; text-align: left; margin-top: 10px;">Menuju Sukses : Panduan Lengkap untuk Pencari Kerja</h5>
</div>

<div style="display: flex; align-items: center; margin-left: 20px; margin-top: 95px; margin-bottom: 5px;">
    <p style="margin-right: 15px;">Lihat detail</p>
    <a href="https://linkkerjaku.wixsite.com/link-kerjaku/post/membuka-pintu-peluang-karir-dengan-link-kerjaku-portal-pekerjaan-terpercaya-untuk-masa-depan-anda" style="margin-bottom: 20px;">--></a>
</div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section Akhir -> 

<!- Footer -->
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
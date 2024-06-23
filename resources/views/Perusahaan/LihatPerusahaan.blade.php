<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <title>Link-Kerjaku | Lihat Perusaahan Home</title>

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


<style>
  .navbar {
            height: 80px; /* Ubah sesuai keinginan Anda */
        }
        .navbar-brand img {
            height: 150px; /* Ubah sesuai keinginan Anda */
        }
</style>

  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="img/Logo.png" alt="Logo">
            </a>        
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active ms-4" aria-current="page" href="/" style="color: blue;">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active ms-4" aria-current="page" href="/lowongankerja2" style="color: #000000;">Lowongan Kerja</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active ms-4" aria-current="page" href="/about" style="color: #000000;">Tentang Kami</a>
                    </li>
                </ul>

                <div class="d-flex" style="margin-right: -25px; position: relative; display: flex; align-items: center;">
        <div style="margin-right: -10px; position: relative;">
            <a href="/Home-Perusahaan">
                <button id="companyButton" class="btn" role="button" style="border: 2px solid #FFC94A; margin-right: 25px; background-color: white; padding: 10px;">
                    Perusahaan
                </button>
            </a>

            <div id="dropdownMenuCompany" class="dropdown-menu">
                <a href="/companyProfile" class="dropdown-item">Profil Perusahaan</a>
                <a href="/companyJobs" class="dropdown-item">Lowongan Kerja</a>
            </div>
        </div>
        <div style="margin-right: -10px; position: relative;">
            <button id="loginButton" class="btn" role="button" style="border: 2px solid #FFC94A; margin-right: 25px; background-color: #FFC94A; border: none; padding: 10px;">
                Sign In / Sign Up
            </button>
            <div id="dropdownMenuLogin" class="dropdown-menu">
                <a href="/loginperusahaan" class="dropdown-item">Login Sebagai Perusahaan</a>
                <a href="/login" class="dropdown-item">Login Sebagai Pelamar</a>
            </div>
        </div>
    </div>

    
            </div>
        </div>
    </nav>

<!-- Section Pertama -->
<section style="background-color: #146D9A; padding: 50px; display: flex; align-items: center; justify-content: center;">
<div style="margin-right: 10px;">
    <h3 style="color: white;">Temukan perusahaan yang tepat untuk Anda</h3>
    <p style="color: white;">Semua yang perlu Anda ketahui tentang perusahaan, semuanya di satu tempat</p>
    <div class="input-group mt-5">
        <input type="text" class="form-control" placeholder="Search by company name">
        <span class="input-group-text">
            <img src="svg/search.svg" alt="Search Icon" width="16" height="16">
        </span>
    </div>
</div>
<div style="margin-left: 60px;">
    <img src="img/LihatPerusahaan.png" alt="Card Image" style="border-radius: 20px; width: 500px; height: 488px;">
    </div>


</section>
<!-- Section Akhir -->

<!-- Section Kedua -->
<section
            class="container splide mt-5"
            aria-label="Splide Basic HTML Example"
            style="margin-top: -35px;"

        >
        <h4 style="text-align: left; color: #146D9A;">Temukan perusahaan yang tepat untuk Anda</h4>
        <p style="text-align: left; color: #146D9A;">Semua yang perlu Anda ketahui tentang perusahaan, semuanya di satu tempat</p>
            <div class="splide__track" style="margin-top: 75px;">
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
    <a href="/LihatPerusahaan" class="btn btn-secondary" style="color: #000000; background-color: #FFC94A;">Lihat Selengkapnya</a>
</div>
</div>
        </section>
<!-- Akhir Section Kedua -->

<!-- Section Ketiga -->
<section style="background-color: #ffffff; padding: 100px; margin-bottom: 55px;">
    <div style="margin-bottom: 65px;">
        <h3 style="text-align: center;">Dapatkan gambaran lengkap sebelum Anda mendaftar</h3>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-3" style="margin-right: 100px; margin-left: 25px;">
            <img src="img/gambar1.jpg" alt="Gambar 1" style="width: 70%; display: block; margin: 0 auto;">
            <h5 style="text-align: center; margin-top: 5px;">Budaya dan Nilai-Nilai </h5>
            <p style="text-align: center;">Mencari tahu tentang budaya perusahaan</p>
        </div>
        <div class="col-md-3" style="margin-right: 100px;">
            <img src="img/gambar2.jpg" alt="Gambar 2" style="width: 70%; display: block; margin: 0 auto;">
            <h5 style="text-align: center; margin-top: 5px;">Penilaian dan ulasan</h5>
            <p style="text-align: center;">Baca ulasan dari karyawan</p>
        </div>
        <div class="col-md-3" style="margin-right: 100px;">
            <img src="img/gambar3.jpg" alt="Gambar 3" style="width: 70%; display: block; margin: 0 auto;">
            <h5 style="text-align: center; margin-top: 5px;">Tunjangan dan keuntungan</h5>
            <p style="text-align: center;">Temukan keuntungan yang penting bagi Anda</p>
        </div>
    </div>
</section>
<!-- Akhir Section Ketiga -->

<!-- Footer -->
<footer style="background-color: #FFC94A; padding: 75px;">
    <div class="container3">
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
        <p>Ikuti Kami di Media Sosial</p>
    </div>
    <div class="col-md-6">
        <!-- Ikuti Kami -->
        <ul class="list-inline text-right" style="margin: 0; padding: 0; list-style: none; margin-left: 455px;">
            <li class="list-inline-item" style="margin-right: 10px;"><a href="https://www.facebook.com/people/Link-Kerjaku/61559180558109/?mibextid=kFxxJD"><img src="svg/facebook.svg" width="30" alt="Facebook Icon"></a></li>
            <li class="list-inline-item" style="margin-right: 10px;"><a href="https://www.instagram.com/linkkerjaku/"><img src="svg/instagram.svg" width="30" alt="Instagram Icon"></a></li>
            <li class="list-inline-item" style="margin-right: 10px; margin-left: 5px;"><a href="#"><img src="img/link.png" width="30" alt="LinkedIn Icon"></a></li>
            <li class="list-inline-item"><a href="https://www.tiktok.com/@linkkerjaku"><img src="img/tiktok.png" width="30" alt="Tiktok Icon"></a></li>
        </ul>
    </div>
</div>
    </div>
</footer>
<!-- Footer -->

<script>
document.addEventListener("DOMContentLoaded", function() {
    const btnNext = document.querySelector(".btn-round2");
    const btnPrev = document.querySelector(".btn-round");
    const cardContainer = document.querySelector(".card-container");
    const cards = document.querySelectorAll(".card-col");

    btnNext.addEventListener("click", function() {
        cardContainer.classList.remove("smooth-slide-prev");
        cardContainer.classList.add("smooth-slide-next");
        cards.forEach(card => card.style.pointerEvents = "none");
        setTimeout(() => {
            cards.forEach(card => card.style.pointerEvents = "auto");
        }, 500);
    });

    btnPrev.addEventListener("click", function() {
        cardContainer.classList.remove("smooth-slide-next");
        cardContainer.classList.add("smooth-slide-prev");
        cards.forEach(card => card.style.pointerEvents = "none");
        setTimeout(() => {
            cards.forEach(card => card.style.pointerEvents = "auto");
        }, 500);
    });
});

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

    document.getElementById('loginButton').addEventListener('click', function(event) {
            event.stopPropagation();
            var dropdownMenuLogin = document.getElementById('dropdownMenuLogin');
            if (dropdownMenuLogin.style.display === 'none' || dropdownMenuLogin.style.display === '') {
                dropdownMenuLogin.style.display = 'block';
            } else {
                dropdownMenuLogin.style.display = 'none';
            }
            document.getElementById('dropdownMenuSignUp').style.display = 'none';
        });

        document.getElementById('signUpButton').addEventListener('click', function(event) {
            event.stopPropagation();
            var dropdownMenuSignUp = document.getElementById('dropdownMenuSignUp');
            if (dropdownMenuSignUp.style.display === 'none' || dropdownMenuSignUp.style.display === '') {
                dropdownMenuSignUp.style.display = 'block';
            } else {
                dropdownMenuSignUp.style.display = 'none';
            }
            document.getElementById('dropdownMenuLogin').style.display = 'none';
        });

        // Close the dropdowns if the user clicks outside of them
        window.addEventListener('click', function(event) {
            var dropdownMenuLogin = document.getElementById('dropdownMenuLogin');
            var dropdownMenuSignUp = document.getElementById('dropdownMenuSignUp');
            if (dropdownMenuLogin.style.display === 'block' && !event.target.matches('#loginButton')) {
                dropdownMenuLogin.style.display = 'none';
            }
            if (dropdownMenuSignUp.style.display === 'block' && !event.target.matches('#signUpButton')) {
                dropdownMenuSignUp.style.display = 'none';
            }
        });
</script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
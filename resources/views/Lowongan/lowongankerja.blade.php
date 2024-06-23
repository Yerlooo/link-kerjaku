<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <title>Link-Kerjaku | Lowongan Kerja</title>

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
.btn-transparent {
        background-color: transparent;
        border: none;
        box-shadow: none;
        color: #000;
        margin: 0;
        padding: 0;
    }
    .btn-transparent:hover {
        color: #007bff; /* Warna teks saat hover */
        background-color: rgba(0, 0, 0, 0.1); /* Sedikit latar belakang transparan saat hover */
    }

.navbar {
            height: 80px; /* Ubah sesuai keinginan Anda */
        }
        .navbar-brand img {
            height: 150px; /* Ubah sesuai keinginan Anda */
        }
        .profile-initial-link {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    margin-left: 10px;
    margin-right: 10px;
    background-color: #FFC94A;
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
}
.profile-initial {
    width: 100%;
    height: 100%;
    border-radius: 50%;
    background-color: #FFC94A;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-weight: bold;
    font-size: 1.2em;
}
.navbar .btn-secondary {
    background-color: #FFC94A;
    border: none;
}

    </style>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
    <a class="navbar-brand" href="/link-kerjaku">
        <img src="img/Logo.png" alt="Logo">
    </a>         
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active ms-4" aria-current="page" href="/link-kerjaku" style="color: #000000;">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active ms-4" aria-current="page" href="/lowongankerja" style="color: blue;">Lowongan Kerja</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active ms-4" aria-current="page" href="/about2" style="color: #000000;">Tentang Kami</a>
                </li>
            </ul>

            <div class="d-flex align-items-center">
                @php
                    $user = Auth::user();
                    $nameParts = explode(' ', $user->name);
                    $initials = strtoupper(substr($nameParts[0], 0, 1));
                    if (isset($nameParts[1])) {
                        $initials .= strtoupper(substr($nameParts[1], 0, 1));
                    }
                @endphp
                    <a href="/ProfillPelamar" class="btn-btn d-flex align-items-center justify-content-center profile-initial-link" role="button" title="{{ $user->name }}">
                        <div class="profile-initial">
                            {{ $initials }}
                        </div>
                    </a>
                    
                    @foreach ($users as $user )
                    <span style="margin-left: 10px;">{{ $user->name }}</span>
                    @endforeach
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
                    @foreach ($users as $user )
                    <span style="color:#000;">{{ $user->email }}</span>
                    @endforeach
                </div>

                        <div class="dropdown-divider"></div>
                        <div class="dropdown-item" onclick="window.location.href='/ProfillPelamar';">
                    <img src="svg/edit.svg" alt="Edit Icon" class="dropdown-icon">
                    Edit Profil
                </div>

                <div class="dropdown-divider"></div>
                <div class="dropdown-item d-flex align-items-center">
                    <img src="svg/logout.svg" alt="Logout Icon" class="dropdown-icon" style="width: 20px; height: 20px;">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <button class="btn btn-transparent ms-2" role="button" onclick="event.preventDefault(); confirmLogout(event)">
                        Logout
                    </button>
                </div>

                    </div>
                </div>
                        </div>
                    </div>
                </nav>

                <!-- Section Pertama -->
                <section style="background-color: #146D9A; padding: 90px; text-align: left;">
                <div>
                    <h3 style="color: white;">
                        Temukan <span style="color: #FFC94A;">Pekerjaan Impianmu</span> Disini!
                    </h3>
                </div>

                </section>
                <!-- Section Akhir -->

                <!-- Section Kedua -->
                <section style="background-color: #FFFFFF; padding: 60px; text-align: center;">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <form id="search-form" style="width: 250px; height: 58px; margin-bottom: 50px; margin-left: 30px;">
                                        <input type="text" id="search-keyword" placeholder="Pencarian" style="border: none; width: 235px; height: 40px; margin-left: 15px; background-color: #E9EBF8; border-radius: 8px;">
                                    </form>
                                </div>
                                <div class="col">
                                    <form style="width: 250px; height: 58px; margin-bottom: 20px;">
                                        <select id="search-location" style="border: none; width: 235px; height: 40px; margin-left: 15px; background-color: #E9EBF8; border-radius: 8px;">
                                        @foreach ($locations as $location)
                                            <option value="">{{ $location->alamat }}</option>
                                        @endforeach
                                        </select>
                                    </form>
                                </div>
                                <div class="col">
                                    <form style="width: 250px; height: 58px; margin-bottom: 20px;">
                                        <select id="search-job-type" style="border: none; width: 235px; height: 40px; margin-left: 15px; background-color: #E9EBF8; border-radius: 8px;">
                                        @foreach ($jobProviders as $jobProvider)
                                            <option value="">{{ $jobProvider->job_type }}</option>
                                            @endforeach
                                        </select>
                                    </form>
                                </div>
                                <div class="col">
                                <form>
                                    <select id="search-experience" style="border: none; width: 235px; height: 40px; margin-left: 15px; background-color: #E9EBF8; border-radius: 8px;">
                                        @foreach ($jobProviders as $jobProvider)
                                            <option value="">{{ $jobProvider->required_skills }}</option>
                                        @endforeach
                                    </select>
                                </form>


                                </div>
                                <div class="col">
                                    <button type="button" id="search-button" class="btn" style="background-color: #FFC94A; color: black; width: 100px; height: 40px;">Cari</button>
                                </div>
                            </div>
                        </div>

                    <section id="search-results" style="padding: 60px; text-align: center; display: none;">
                        <div class="container">
                            <h2>Hasil Pencarian</h2>
                            <div id="results-container" class="row">
                                <!-- Hasil pencarian akan ditambahkan di sini -->
                            </div>
                        </div>
                    </section>

                    <div class="row">
                            <div class="col">
                                <h5 style="text-align: left; margin-left: 315px;">Pekerjaan</h5>
                            </div>
                        </div>

                        <div class="container" style="margin-top: 35px;">
                    <div class="row">
                        <!-- Left column: Job listings -->
                        <div class="col-md-8">
                            <div class="row justify-content-center">
                                @foreach($jobProviders as $jobProvider)
                                    <div class="col-md-6 mb-4">
                                    <div class="card job-card" data-title="{{ $jobProvider->job_title }}" data-company="{{ $jobProvider->company_name }}" data-description="{{ $jobProvider->job_description }}" data-type="{{ $jobProvider->job_type }}" style="background-color: #FFFFFF; border-radius: 8px; box-shadow: 0 0 10px rgba(255, 0, 0, 0.5);">
                                            <div class="d-flex align-items-center mt-3">
                                                <div class="rounded-circle overflow-hidden" style="width: 83px; height: 83px; background-color: #808080; margin-left: 25px;">
                                                    <img src="img/google.jpg" alt="Card Image" style="width: 100%; height: 100%; object-fit: cover;">
                                                </div>
                                                <div class="ml-3 mt-2">
                                                    <h5 class="mb-2">{{ $jobProvider->job_title }}</h5>
                                                    <p class="mb-0">{{ $jobProvider->company_name }}</p>
                                                </div>
                                            </div>
                                            <p class="mx-3 my-3" style="text-align: justify; font-size: 14px;">{{ $jobProvider->job_description }}</p>
                                            <div class="d-flex mx-3 mb-3">
                                            <div class="card job-card" data-title="{{ $jobProvider->job_title }}" data-company="{{ $jobProvider->company_name }}" data-description="{{ $jobProvider->job_description }}" data-type="{{ $jobProvider->job_type }}" style="background-color: #FFFFFF; border-radius: 8px; box-shadow: 0 0 10px rgba(255, 0, 0, 0.5);">
                                            @foreach ($jobProvider->locations as $location)
                                                <div class="hidden" data-location="{{ $location->alamat }}"></div>
                                                <div class="badge badge-secondary" style="background-color: #B2C4D4;">Location: {{ $location->alamat }}</div>
                                            @endforeach
                                            </div>
                                                <span class="badge badge-secondary" style="background-color: #B2C4D4;">{{ $jobProvider->job_type }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <!-- Right column: Detailed job information -->
                        <div class="col-md-4">
                            <div class="card" id="job-detail-card" style="width: 100%; height: 100%; background-color: #FFFFFF; border-radius: 8px; box-shadow: 0 0 10px rgba(255, 0, 0, 0.5);">
                                <div style="display: flex; align-items: center; margin-top: 20px;">
                                    <div style="width: 83px; height: 83px; background-color: #808080; border-radius: 50%; margin-left: 25px; overflow: hidden;">
                                        <img src="" alt="Card Image" style="width: 100%; height: 100%; object-fit: cover;">
                                    </div>
                                </div>
                                <div style="margin: 20px;">
                                    <h5 id="job-title">Digital Marketing</h5>
                                    <p id="company-name">Perusahaan Google</p>
                                    <a href="/LamarPekerjaan" style="text-decoration: none;">
                                        <button type="button" class="btn btn-warning" style="width: 169px; height: 58px; border-radius: 4px;">Lamar Sekarang</button>
                                    </a>
                                    <button type="button" class="btn btn-warning" style="width: 100px; height: 58px;">Simpan</button>
                                </div>
                                <div style="margin: 20px;">
                                    <h5>Deskripsi Pekerjaan</h5>
                                    <p id="job-description">{{ $jobProvider->job_description }}</p>
                                </div>
                                <div style="margin: 20px;">
                                    <h5>Informasi Pekerjaan</h5>
                                    <div id="job-info" class="row">
                                        <!-- Dynamic job info will be injected here -->
                                    </div>
                                </div>
                                <div style="margin: 20px;">
                                    <h5>Gaji dan Benefit Yang Ditawarkan</h5>
                                    <div id="job-benefits" style="display: flex; align-items: center; margin-bottom: 10px;">
                                        <!-- Dynamic job benefits will be injected here -->
                                    </div>
                                </div>
                                <div style="margin: 20px;">
                                    <h5>Cara Melamar</h5>
                                    <div style="display: flex; align-items: center; margin-bottom: 10px;">
                                        <img src="svg/pin.svg" alt="Icon" style="width: 30px; height: 30px; margin-right: 10px;">
                                        <h6>Buat CV dan surat lamaran yang menarik.</h6>
                                    </div>
                                    <div style="display: flex; align-items: center; margin-bottom: 10px;">
                                        <img src="svg/pin.svg" alt="Icon" style="width: 30px; height: 30px; margin-right: 10px;">
                                        <h6>Klik "Lamar Sekarang" dan ikuti instruksi.</h6>
                                    </div>
                                    <div style="display: flex; align-items: center; margin-bottom: 10px;">
                                        <img src="svg/pin.svg" alt="Icon" style="width: 30px; height: 30px; margin-right: 10px;">
                                        <h6>Lamar sebelum batas waktu berakhir.</h6>
                                    </div>
                                </div>
                                <hr style="border: none; border-top: 2px solid #000000; margin: 15px;">
                                <div style="margin: 20px;">
                                    <h5>Informasi Lebih Lanjut</h5>
                                    <div class="row justify-content-center">
                                        <div class="col-md-6">
                                            <a href="/HubungiSekarang" style="text-decoration: none;">
                                                <div class="card" style="background-color: #FFC94A; border-radius: 8px; text-align: center;">
                                                    <button style="color: #FFFFFF; background-color: transparent; border: none; cursor: pointer; padding: 15px;">Hubungi Kami Sekarang</button>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-6">
                                            <a href="/DetailPerusahaan" style="text-decoration: none;">
                                                <div class="card" style="border-radius: 8px; text-align: center; border: 2px solid #FFC94A;">
                                                    <button style="color: #000000; background-color: transparent; border: none; cursor: pointer; padding: 15px;">Detail Perusahaan</button>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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

                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
                    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
                    <script>
                        document.addEventListener('DOMContentLoaded', function () {
                    const jobCards = document.querySelectorAll('.job-card');
                    const jobTitle = document.getElementById('job-title');
                    const companyName = document.getElementById('company-name');
                    const jobDescription = document.getElementById('job-description');
                    const jobInfo = document.getElementById('job-info');
                    const jobBenefits = document.getElementById('job-benefits');

                    jobCards.forEach(card => {
                        card.addEventListener('click', function () {
                            const title = card.getAttribute('data-title');
                            const company = card.getAttribute('data-company');
                            const description = card.getAttribute('data-description');
                            const type = card.getAttribute('data-type');

                            jobTitle.textContent = title;
                            companyName.textContent = company;
                            jobDescription.textContent = description;

                            jobInfo.innerHTML = '';
                            const locations = card.querySelectorAll('.hidden[data-location]');
                            locations.forEach(location => {
                                const loc = location.getAttribute('data-location');
                                jobInfo.innerHTML += `
                                    <div style="display: flex; align-items: center; margin-bottom: 10px;">
                                        <img src="svg/plus.svg" alt="Icon" style="width: 24px; height: 24px; margin-right: 10px;">
                                        <span>Location: ${loc}</span>
                                    </div>
                                `;
                            });

                            jobInfo.innerHTML += `
                                <div style="display: flex; align-items: center; margin-bottom: 10px;">
                                    <img src="svg/plus.svg" alt="Icon" style="width: 24px; height: 24px; margin-right: 10px;">
                                    <span>Type: ${type}</span>
                                </div>
                            `;
                        });
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

                    function confirmLogout(event) {
                            event.preventDefault();
                            Swal.fire({
                                title: 'Apakah Anda yakin ingin keluar?',
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Ya, keluar',
                                cancelButtonText: 'Batal'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    document.getElementById('logout-form').submit();
                                }
                            });
                        }
                    </script>
                </body>
                </html>
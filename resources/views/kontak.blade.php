<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Link-Kerjaku | Kontak</title>

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
        <div class="dropdown-item" onclick="window.location.href='/ProfillPelamar';">
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
<section style="background-color: #FFFFFF; display: flex; justify-content: center; align-items: center; height: 100vh; padding: 50px;">
<div style="width: 1300px; height: 655px; background-color: #E8F2F7; border-radius: 4px; padding: 20px; display: flex; box-sizing: border-box;">
            <!-- Kontak Section -->
            <div style="flex: 1; padding: 20px;">
                <h5 style="margin: 0 0 20px 0; font-size: 24px; margin-left: 225px;">Kontak</h5>
                <p style="margin-left: 55px; margin-right: 25px;">
                    Jangan ragu untuk menghubungi Link Kerjaku untuk membahas bagaimana Link Kerjaku dapat berkontribusi pada tim Anda.
                </p>
                <h5 style="font-weight: bold; margin-left: 225px; margin-top: 45px;">Alamat</h5>
                <p style="margin-left: 155px; margin-top: 20px;">Alamat Lengkap Link Kerjaku</p>
                <h5 style="margin: 0 0 10px 0; font-weight: bold; margin-top: 25px; margin-left: 225px; margin-top: 35px;">Nomor</h5>
                <p style="margin-left: 185px; margin-top: 20px;">(+62) 000 000 000</p>
                <h5 style="font-weight: bold; margin-left: 225px; margin-top: 45px;">Email</h5>
                <p style="margin-left: 185px; margin-top: 25px;">Email Link Kerjaku</p>

                <div style="display: flex; justify-content: center; margin-top: 75px; margin-right: 75px;">
                    <img src="svg/facebook.svg" alt="Icon 1" style="width: 35px; height: 35px; margin: 0 10px;">
                    <img src="svg/instagram.svg" alt="Icon 2" style="width: 35px; height: 35px; margin: 0 10px;">
                    <img src="svg/link.svg" alt="Icon 3" style="width: 35px; height: 35px;; margin: 0 10px;">
                    <img src="svg/twitter.svg" alt="Icon 4" style="width: 35px; height: 35px; margin: 0 10px;">
                </div>
            </div>
            <!-- Form Section -->
            <div style="flex: 1; padding: 20px; background-color: #FFFFFF; border-radius: 4px; box-shadow: 0 0 10px rgba(255, 0, 0, 0.5);">
                <h5 style="margin: 0 0 20px 0; font-size: 24px; margin-left: 245px;">Hubungi kami</h5>
                <form style="margin-top: 55px;">
                    <input type="text" id="name" name="name" placeholder="Nama" style="width: 100%; padding: 10px; margin-bottom: 20px; border: none; border-bottom: 1px solid #ccc; outline: none;">
                    
                    <input type="email" id="email" name="email" placeholder="Email" style="width: 100%; padding: 10px; margin-bottom: 20px; border: none; border-bottom: 1px solid #ccc; outline: none; margin-top: 25px;">
                    
                    <input type="tel" id="phone" name="phone" placeholder="Nomor Hp" style="width: 100%; padding: 10px; margin-bottom: 20px; border: none; border-bottom: 1px solid #ccc; outline: none; margin-top: 25px;">
                    
                    <textarea id="message" name="message" placeholder="Pesan" style="width: 100%; padding: 10px; margin-bottom: 20px; border: none; border-bottom: 1px solid #ccc; outline: none; margin-top: 25px;"></textarea>
                    
                    <button type="submit" style="background-color: #FFC94A; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer; margin-left: 265px; margin-top: 20px;">Kirim</button>
                </form>
            </div>
        </div>    
    </section>
<!-- Section Akhir -->


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
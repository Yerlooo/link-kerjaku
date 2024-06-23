<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Profill Perusahaan</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

::after,
::before {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

a {
    text-decoration: none;
}

li {
    list-style: none;
}

h1 {
    font-weight: 600;
    font-size: 1.5rem;
}

body {
    font-family: 'Poppins', sans-serif;
}

.wrapper {
    display: flex;
}

.main {
    min-height: 100vh;
    width: 100%;
    overflow: hidden;
    transition: all 0.35s ease-in-out;
    background-color: #fafbfe;
}

#sidebar {
    width: 70px;
    min-width: 70px;
    z-index: 1000;
    transition: all .25s ease-in-out;
    background-color: #0e2238;
    display: flex;
    flex-direction: column;
}

#sidebar.expand {
    width: 260px;
    min-width: 260px;
}

.toggle-btn {
    background-color: transparent;
    cursor: pointer;
    border: 0;
    padding: 1rem 1.5rem;
}

.toggle-btn i {
    font-size: 1.5rem;
    color: #FFF;
}

.sidebar-logo {
    margin: auto 0;
}

.sidebar-logo a {
    color: #FFF;
    font-size: 1.15rem;
    font-weight: 600;
}

#sidebar:not(.expand) .sidebar-logo,
#sidebar:not(.expand) a.sidebar-link span {
    display: none;
}

.sidebar-nav {
    padding: 2rem 0;
    flex: 1 1 auto;
}

a.sidebar-link {
    padding: .625rem 1.625rem;
    color: #FFF;
    display: block;
    font-size: 0.9rem;
    white-space: nowrap;
    border-left: 3px solid transparent;
}

.sidebar-link i {
    font-size: 1.1rem;
    margin-right: .75rem;
}

a.sidebar-link:hover {
    background-color: rgba(255, 255, 255, .075);
    border-left: 3px solid #3b7ddd;
}

.sidebar-item {
    position: relative;
}

#sidebar:not(.expand) .sidebar-item .sidebar-dropdown {
    position: absolute;
    top: 0;
    left: 70px;
    background-color: #0e2238;
    padding: 0;
    min-width: 15rem;
    display: none;
}

#sidebar:not(.expand) .sidebar-item:hover .has-dropdown+.sidebar-dropdown {
    display: block;
    max-height: 15em;
    width: 100%;
    opacity: 1;
}

#sidebar.expand .sidebar-link[data-bs-toggle="collapse"]::after {
    border: solid;
    border-width: 0 .075rem .075rem 0;
    content: "";
    display: inline-block;
    padding: 2px;
    position: absolute;
    right: 1.5rem;
    top: 1.4rem;
    transform: rotate(-135deg);
    transition: all .2s ease-out;
}

#sidebar.expand .sidebar-link[data-bs-toggle="collapse"].collapsed::after {
    transform: rotate(45deg);
    transition: all .2s ease-out;
}

/* Circular */
* {
      padding: 0;
      margin: 0;
      font-family: 'Poppins', arial;
      box-sizing: border-box;
    }

    .card {
      box-shadow: 6px 6px 10px -1px rgba(0,0,0,0.15),
      -6px -6px 10px -1px rgba(255,255,255,0.7);
      width: 430px;
      padding: 45px 0;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      border-radius: 7px;
      background-color: #082A3C;
        color: #FFFFFF;
    }

    .circular-bar {
      width: 260px;
      height: 260px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 40px;
    }

    .circular-bar::before {
      content: "";
      position: absolute;
      width: 220px;
      height: 220px;
      border-radius: 50%;
      background-color: #082A3C;
    }

    .percent {
      z-index: 10;
      font-size: 30px;
    }

    label {
      font-size: 20px;
    }

/* CARD 2 */
.card.selesai {
  margin-left: 50px;
  margin-top: 55px;
}

.card.selesai .circular-bar {
  width: 260px;
  height: 260px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: 40px;
}

.card.selesai .circular-bar::before {
  content: "";
  position: absolute;
  width: 220px;
  height: 220px;
  border-radius: 50%;
  background-color: #082A3C;

}

.card.selesai .percent {
  z-index: 10;
  font-size: 30px;
}

.card.selesai label {
  font-size: 20px;
}

/* CARD 3 */
.card.tiga {
  margin-left: 50px;
  margin-top: 55px;
}

.card.tiga .circular-bar {
  width: 260px;
  height: 260px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: 40px;
}

.card.tiga .circular-bar::before {
  content: "";
  position: absolute;
  width: 220px;
  height: 220px;
  border-radius: 50%;
  background-color: #082A3C;
}

.card.tiga .percent {
  z-index: 10;
  font-size: 30px;
}

.card.tiga label {
  font-size: 20px;
}

/* BARU */
.funnel-chart {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin: 20px;
    }
    .funnel-stage {
      flex: 1;
      text-align: center;
      padding: 20px;
      color: white;
    }
    .funnel-stage:nth-child(1) { background-color: #00a2e8; }
    .funnel-stage:nth-child(2) { background-color: #0073e6; }
    .funnel-stage:nth-child(3) { background-color: #000080; }
    .funnel-value {
      font-size: 2em;
      font-weight: bold;
    }


    
    </style>
</head>

<body>
    <div class="wrapper">
        <aside id="sidebar">
        <div class="d-flex">
    <button class="toggle-btn" type="button">
        <i class="lni lni-grid-alt"></i>
    </button>
    <div class="sidebar-logo">
    <a href="/PageDashboard">Link Kerjaku</a>
    </div>
</div>
<hr size="5" width="100%" color="#FFFFFF">
<a href="/profill">
    <img src="img/google.png" alt="Logo" width="31.94px" height="33px" style="display: inline-block; margin-left: 20px;">
</a>
<span style="vertical-align: middle; color: #FFFFFF; margin-left: 75px; margin-top: -30px;">Google</span>
<hr size="5" width="100%" color="#FFFFFF" style="margin-top: 25px;">

            <ul class="sidebar-nav">

            <li class="sidebar-item">
                    <a href="/Page-Profill" class="sidebar-link">
                        <i class="lni lni-user"></i>
                        <span style="color: blue;">Profile</span>
                    </a>
                </li>

                <li class="sidebar-item" style="margin-top: 20px;">
    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
        data-bs-target="#auth" aria-expanded="false" aria-controls="auth" id="dashboard-link">
        <i class="lni lni-protection"></i>
        <span>Dashboard</span>
    </a>
    <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar" style="margin-top: 10px;">
        <li class="sidebar-item">
            <a href="/Page-StatusPelamar" class="sidebar-link">
                <img src="img/resume.png" alt="Logo" width="25px" height=""> Status Pelamar
            </a>
        </li>
        <li class="sidebar-item">
            <a href="/Page-BuatLowongan" class="sidebar-link">
                <img src="img/vacancy.png" alt="Logo" width="25px" style="margin-top: 10px;"> Buat Lowongan
            </a>
        </li>
        <li class="sidebar-item">
            <a href="#" class="sidebar-link">
                <img src="img/StatusPelamar.png" alt="Logo" width="25px" style="margin-top: 10px;"> Lowongan Kerja
            </a>
        </li>
    </ul>
</li>

            </ul>
            <div class="sidebar-footer">
                <a href="/" class="sidebar-link">
                    <i class="lni lni-exit"></i>
                    <span>Logout</span>
                </a>
            </div>
        </aside>
        <div class="main p-3">
 
        <section style="background-image: url('img/profillpelamar.jpg'); background-size: 500px 500px; background-position: center; padding: 225px;">
</section>

<section style="background-color: #FFFFFF; padding: 50px;">
<div style="width: 155px; height: 155px; background-color: #A0A0A0; border-radius: 50%; margin-right: 125px; margin-top: -85px; margin-left: 100px; position: relative; overflow: hidden;">
    <img src="img/Google.jpg" alt="Gambar" style="width: 100%; height: 100%; object-fit: cover; border: 10px solid #1679AB; border-radius: 50%;">
</div>
    <div style="margin-top: -100px; margin-left: -25px; margin-bottom: 155px;">
    <div style="display: flex; align-items: center;">
    <div style="flex-grow: 1;">
        <h2 style="margin-left: 300px; color: #146D9A;">Google</h2>
        <p style="margin-left: 302px; color: #146D9A;">Perusahaan</p>
    </div>
    <div style="display: flex; align-items: center; margin-left: 20px;">
        <img src="svg/instagram.svg" alt="Instagram" style="width: 30px; height: 30px;">
        <img src="svg/link.svg" alt="Link" style="width: 30px; height: 30px; margin-left: 20px; filter: invert(53%) sepia(33%) saturate(2754%) hue-rotate(190deg) brightness(94%) contrast(91%);">
        <img src="svg/facebook.svg" alt="Facebook" style="width: 30px; height: 30px; margin-left: 25px; filter: invert(53%) sepia(33%) saturate(2754%) hue-rotate(190deg) brightness(94%) contrast(91%);">
    </div>
</div>

        <div style="text-align: left; padding: 155px;">
        <div style="text-align: left; margin-top: 115px; margin-top: -25px;">
        <h3 style="color: #146D9A;">Tentang Perusahaan</h3>
        <p>Saya Olivia Rhye adalah seorang profesional yang ahli dalam Special Design UI/UX, Marketing Research, dan Digital Marketing. Dengan keahlian saya dalam desain yang menarik dan penelitian pasar yang teliti, serta kemampuan saya dalam strategi pemasaran digital, saya menghadirkan solusi-solusi yang efisien dan memikat dalam dunia digital. Saya berfokus pada kualitas dan inovasi, 
            dan saya selalu berusaha untuk menciptakan pengalaman pengguna yang luar biasa.</p>
            <a href="#" style="text-decoration: none; color: #000000; font-weight: bold;">
    Read more
    </a>
            </div>

            <div style="text-align: left; margin-top: 95px;">
        <h3 style="color: #146D9A;">Visi & Misi</h3>
        <form>
            <input type="text" style="width: 910px; height: 150px;  border: 1px solid black; border-radius: 8px; padding: 5px; margin-bottom: 20px; margin-top: 10px;" placeholder="Tambahkan Visi Misi ke profil untuk memperkenalkan perusahaan anda..">
        </form>
            </div>

            <div style="text-align: left; margin-top: 95px;">
        <h3 style="color: #146D9A;">Tipe Industri</h3>
        <form>
    <select style="width: 910px; height: 70px; border: 1px solid black; border-radius: 8px; padding: 5px; margin-bottom: 20px; margin-top: 10px;">
        <option value="semarang">Industri Primer</option>
        <option value="medan">Industri Sekunder</option>
        <option value="jakarta">Industri Tersier</option>
        <option value="bandung"> Industri Kuarter</option>
    </select>
</form>        
            </div>

            <div style="text-align: left; margin-top: 95px;">
        <h3 style="color: #146D9A;">Jumlah Karyawan</h3>
        <form>
    <select style="width: 910px; height: 70px; border: 1px solid black; border-radius: 8px; padding: 5px; margin-bottom: 20px; margin-top: 10px;">
        <option value="semarang">< 10 Karyawan atau 10 karyawan</option>
        <option value="medan">< 50 Karyawan atau 50 karyawan</option>
        <option value="jakarta">< 100 Karyawan atau 100 karyawan</option>
        <option value="bandung">< 500 Karyawan atau 500 karyawan</option>
    </select>
</form>    
            </div>

            <div style="text-align: left; margin-top: 95px;">
        <h3 style="color: #146D9A;">Lokasi Lengkap</h3>
        <form>
            <input type="text" style="width: 910px; height: 70px;  border: 1px solid black; border-radius: 8px; padding: 5px; margin-bottom: 20px; margin-top: 10px;" placeholder="Ketik disini...">
        </form>
            </div>

            <div class="d-flex" style="margin-left: 355px; position: relative; display: flex; align-items: center; margin-top: 255px;">
    <div style="margin-right: -10px; position: relative; margin-right: 255px;">
    <a href="/Home-Perusahaan">
    <button id="companyButton" class="btn" role="button" style="border: 2px solid #FFC94A; margin-right: 25px; background-color: white; padding: 10px;">
        Edit
    </button>
</a>
    </div>
    <div style="margin-right: -10px; position: relative;">
    <button id="loginButton" class="btn" role="button" style="border: 2px solid #FFC94A; margin-right: 25px; background-color: #FFC94A; border: none; padding: 10px;">
        Simpan Perubahan
    </button>
</div>
</div>

    </div>
        </div>
</section>

        
    </div>

</div>

    <script>
        const hamBurger = document.querySelector(".toggle-btn");

hamBurger.addEventListener("click", function () {
  document.querySelector("#sidebar").classList.toggle("expand");
});

let CircularBar = document.querySelector(".circular-bar");
let PercentValue = document.querySelector(".percent");

let InitialValue = 0;
let finaleValue = 50;
let speed = 10;

let timer = setInterval(() => {
  InitialValue += 1;

  CircularBar.style.background = `conic-gradient(#4285f4 ${InitialValue/100 * 360}deg, #e8f0f7 0deg)`;
  PercentValue.innerHTML = InitialValue+"%";

  if(InitialValue >= finaleValue){
    clearInterval(timer);
  }
}, speed)


let CircularBarSelesai = document.querySelector(".card.selesai .circular-bar");
let PercentValueSelesai = document.querySelector(".card.selesai .percent");

let initialValueSelesai = 0;
let finaleValueSelesai = 10;
let speedSelesai = 10;

let timerSelesai = setInterval(() => {
  initialValueSelesai += 1;

  CircularBarSelesai.style.background = `conic-gradient(#4285f4 ${initialValueSelesai / 100 * 360}deg, #e8f0f7 0deg)`;
  PercentValueSelesai.innerHTML = initialValueSelesai + "%";

  if (initialValueSelesai >= finaleValueSelesai) {
    clearInterval(timerSelesai);
  }
}, speedSelesai);

let CircularBarTiga = document.querySelector(".card.tiga .circular-bar");
let PercentValueTiga = document.querySelector(".card.tiga .percent");

let initialValueTiga = 0;
let finaleValueTiga = 5;
let speedTiga = 10;

let timerTiga = setInterval(() => {
  initialValueTiga += 1;

  CircularBarTiga.style.background = `conic-gradient(#4285f4 ${initialValueTiga / 100 * 360}deg, #e8f0f7 0deg)`;
  PercentValueTiga.innerHTML = initialValueTiga + "%";

  if (initialValueTiga >= finaleValueTiga) {
    clearInterval(timerTiga);
  }
}, speedTiga);

document.addEventListener("DOMContentLoaded", function () {
  const data = {
    totalPelamar: 200,
    sedangDiproses: 80,
    diterima: 20
  };

  function smoothIncrement(elementId, endValue, duration) {
    let startValue = 0;
    const increment = endValue / (duration / 10);
    
    function updateValue() {
      startValue += increment;
      if (startValue >= endValue) {
        startValue = endValue;
      } else {
        setTimeout(updateValue, 10);
      }
      document.getElementById(elementId).textContent = Math.floor(startValue);
    }
    
    updateValue();
  }

  smoothIncrement("totalPelamar", data.totalPelamar, 2000);
  smoothIncrement("sedangDiproses", data.sedangDiproses, 2000);
  smoothIncrement("diterima", data.diterima, 2000);
});

document.getElementById('dashboard-link').addEventListener('click', function(event) {
        event.preventDefault();
        window.location.href = '/PageDashboard'; // Ganti dengan URL halaman tujuan
    });

    document.getElementById('loginButton').addEventListener('click', function() {
        Swal.fire({
            title: 'Berhasil',
            text: 'Simpan Perubahan Berhasil',
            icon: 'success',
            confirmButtonColor: '#FFC94A',
            confirmButtonText: 'OK'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = '/Page-Profill';
            }
        });
    });

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>
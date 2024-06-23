<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Status Pelamar</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

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

    .text-clickable {
    cursor: pointer;
}

.text-clickable:hover {
    color: #FFC94A;
}

.dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            margin-top: 15px;
            margin-left: 55px;
        }
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }
        .dropdown-content a:hover {background-color: #f1f1f1;}
        .show {display: block;}

        .dropdown-content span {
            margin-left: 8px;
        }
        .card {
        display: flex;
        flex-direction: row;
        align-items: center;
        margin-bottom: 15px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border: none;
        border-radius: 10px;
    }
    .card-img-left {
        width: 150px; /* Atur lebar gambar */
        height: 150px; /* Atur tinggi gambar */
        object-fit: cover;
        border-top-left-radius: 10px;
        border-bottom-left-radius: 10px;
    }
    .card-body {
        display: flex;
        flex-direction: column;
        padding: 15px;
        flex: 1;
    }
    .info-container {
        display: flex;
        justify-content: space-between;
        align-items: center; /* Memastikan item info sejajar vertikal */
        margin-top: auto; /* Mendorong informasi ke bawah */
    }
    .info-item {
        display: flex;
        align-items: center;
        margin-right: 20px; /* Jarak antara setiap info item */
    }
    .info-item img {
        margin-right: 5px;
        height: 16px; /* Atur tinggi ikon */
    }
    .info-item p {
        margin: 0;
    }
    #searchInput {
        padding-right: 30px;
        background-image: url('svg/search.svg');
        background-repeat: no-repeat;
        background-position: calc(100% - 10px) center;
        background-color: #E8F2F7;
        border-radius: 30px;
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
    <a href="/PageDashboard">
    <span style="color: #FFDB00;">Link</span>
    <span style="color: #3572EF;">Kerjaku</span>
</a>
    </div>
</div>
<hr size="5" width="100%" color="#FFFFFF">

<ul class="sidebar-nav">

<li class="sidebar-item" style="margin-top: -20px;">
        <a href="/PageDashboard" class="sidebar-link">
        <i class="lni lni-protection"></i>
        <span>Dashboard</span>
        </a>
    </li>

<li class="sidebar-item" style="margin-top: 20px;">
<a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
data-bs-target="#auth" aria-expanded="false" aria-controls="auth" id="dashboard-link">
<i class="lni lni-apartment"></i>
    <span >Lowongan</span>
</a>
<ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar" style="margin-top: 10px;">
<li class="sidebar-item">
<a href="/Page-StatusPelamar" class="sidebar-link" style="color: #FCDC94;">
    <img src="img/resume.png" alt="Logo" width="25px" height=""> Status Pelamar
</a>
</li>
<li class="sidebar-item">
<a href="/Page-BuatLowongan" class="sidebar-link">
    <img src="img/vacancy.png" alt="Logo" width="25px" style="margin-top: 10px;"> Buat Lowongan
</a>
</li>
<li class="sidebar-item">
<a href="/Page-LowonganKerja" class="sidebar-link">
    <img src="img/StatusPelamar.png" alt="Logo" width="25px" style="margin-top: 10px;"> Lowongan Kerja
</a>
</li>
</ul>
</li>


</ul>

        </aside>
        <div class="main p-3">

        <div class="text-left" style="margin-top: 15px;">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
  <ol class="breadcrumb" style="margin-left: 55px;">
  <li class="breadcrumb-item">
                <img src="img/Resume.png" alt="Home" width="26" height="26">
            </li>
                <li class="breadcrumb-item active" style="margin-left: 5px;" aria-current="page"><a href="/Page-StatusPelamar">Status Pelamar</a></li>
  </ol>
</nav>
    </div>

    <div class="d-flex align-items-center" style="position: relative; margin-left: 1065px; margin-top: -45px;">
    <a href="#" class="btn-btn d-flex align-items-center justify-content-center" role="button" style="width: 40px; height: 40px; border-radius: 50%; margin-left: 10px; margin-right: 10px;" title="Olivia Rhye">
        <img src="img/Google.jpg" alt="Profile Image" style="width: 45px; height: 45px; border-radius: 50%;">
    </a>
    <span style="margin-left: 10px;">Google</span>
    <div id="dropdownIcon" class="arrow-icon" style="margin-left: 12px; width: 26px; height: 26px; border: 2px solid #FFC94A; border-radius: 50%; display: flex; align-items: center; justify-content: center; cursor: pointer;">
        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
            <path d="M6 9l6 6 6-6"></path>
        </svg>
    </div>
    <div id="myDropdown" class="dropdown-content" style="top: 100%; left: -30px;">
    <a href="/Page-Profill">
            <img src="img/editing.png" alt="Profile Icon" width="16" height="16">
            <span>Profile</span>
        </a>
        <a href="/">
            <img src="img/logout.png" alt="Profile Icon" width="16" height="16">
            <span>Logout</span>
        </a>    </div>
</div>


        <section style="background-color: #146D9A; padding: 50px; border-radius: 12px;  margin-top: 85px;">
<div class="col" style="margin-left: -25px;">
<h6 style="margin-left: 55px; color: #FFFFFF;">Pilih Lowongan</h6>

<select class="select" aria-label="Default select example" style="width: 250px; height: 40px; margin-left: 50px; margin-top: 5px; background-color: #146D9A; border: none; color: #FFFFFF;">
<option style="color: #FFFFFF;" selected>Software Engineer</option>
  <option style="color: #FFFFFF;" value="1">Analisis Data</option>
  <option style="color: #FFFFFF;" value="2">UI/UX</option>
  <option style="color: #FFFFFF;" value="3">Digital Marketing</option>
</select>

</div>

<div style="display: flex; justify-content: space-between; margin-top: 45px; margin-left: 100px; margin-right: 135px; color: #FFFFFF;">
    <span class="text-clickable" style="margin-left: -55px;">Semua Pelamar</span>
    <span style="margin-left: 45px;" class="text-clickable">Belum dibaca</span>
    <span style="margin-left: 55px;" class="text-clickable">Sudah dibaca</span>
    <span style="margin-left: 65px;" class="text-clickable">Ditolak</span>
    <span style="margin-left: 75px; margin-right: 220px;" class="text-clickable">Disimpan</span>
</div>
</section>


<section style="background-color: #E8F2F7; padding: 50px;">
<div class="container mt-4">
    <div class="row mb-3">
        <div class="col-md-6">
            <h6>Menampilkan {{ count($selfDescriptions) }} Pelamar</h6>
        </div>
        <div class="col-md-6">
            <form class="d-flex">
                <input id="searchInput" class="form-control me-2" type="search" placeholder="Cari Pelamar" aria-label="Search" oninput="filterCards()">
            </form>
        </div>
    </div>

    <div class="row" id="cardContainer">
        <div class="col-12">
            @foreach ($selfDescriptions as $index => $selfDescription)
                <div class="card mb-3">
                    <a href="/PageOverlay-Dashboard" style="text-decoration: none; color: inherit;">
                        <img src="img/pelamar{{ $index + 1 }}.jpg" class="card-img-left" alt="Card Image">
                    </a>
                    <div class="card-body">
                        <h6 class="card-title">{{ $selfDescription->nama }}</h6>
                        <div class="info-container">
                            <div class="info-item">
                                <img src="svg/location.svg" alt="Location Icon">
                                @if (isset($applicantLocations[$index]))
                                    <p>{{ $applicantLocations[$index]->kota }}</p>
                                @else
                                    <p>Location not available</p>
                                @endif
                            </div>
                            <div class="info-item">
                                <img src="svg/date.svg" alt="Date Icon">
                                <p>{{ Carbon\Carbon::parse($selfDescription->created_at)->diffForHumans() }}</p>
                            </div>
                            <div class="info-item">
                                <img src="svg/bag.svg" alt="Experience Icon">
                                <p>2 tahun</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<nav aria-label="Page navigation example" style="margin-top: 55px; margin-left: 355px; width: 683px; height: 58px;">
  <ul class="pagination" style="display: flex; justify-content: space-between; height: 100%; margin: 0; padding: 0; list-style: none;">
    <li class="page-item" style="flex: 1; display: flex; justify-content: center; align-items: center;">
      <a class="page-link" href="/Page-StatusPelamar" style="display: block; width: 100%; text-align: center;">Previous</a>
    </li>
    <li class="page-item" style="flex: 1; display: flex; justify-content: center; align-items: center;">
      <a class="page-link" href="/Page-StatusPelamar" style="display: block; width: 100%; text-align: center;">1</a>
    </li>
    <li class="page-item" style="flex: 1; display: flex; justify-content: center; align-items: center;">
      <a class="page-link" href="/Page-StatusPelamar2" style="display: block; width: 100%; text-align: center;">2</a>
    </li>
    <li class="page-item" style="flex: 1; display: flex; justify-content: center; align-items: center;">
      <a class="page-link" href="/Page-StatusPelamar3" style="display: block; width: 100%; text-align: center;">3</a>
    </li>
    <li class="page-item" style="flex: 1; display: flex; justify-content: center; align-items: center;">
      <a class="page-link" href="/Page-StatusPelamar2" style="display: block; width: 100%; text-align: center;">Next</a>
    </li>
  </ul>
</nav>



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

document.getElementById("searchInput").addEventListener("input", function(event) {
        // Ambil nilai input pencarian
        var searchTerm = event.target.value.toLowerCase();

        // Ambil daftar pelamar
        var applicants = ["John Doe", "Jane Doe", "Alice Smith", "Bob Johnson"]; // Ganti dengan daftar pelamar yang sesuai

        // Filter pelamar yang sesuai dengan nilai input pencarian
        var filteredApplicants = applicants.filter(function(applicant) {
            return applicant.toLowerCase().includes(searchTerm);
        });

        // Tampilkan hasil pencarian (contoh: tampilkan di console)
        console.log(filteredApplicants);
    });

    document.getElementById("dropdownIcon").addEventListener("click", function() {
        document.getElementById("myDropdown").classList.toggle("show");
    });

    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
        if (!event.target.matches('.arrow-icon') && !event.target.matches('.arrow-icon *')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            for (var i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }

    function filterCards() {
            // Mendapatkan nilai dari input pencarian
            var input = document.getElementById('searchInput');
            var filter = input.value.toUpperCase();
            
            // Mendapatkan semua kartu
            var cards = document.getElementsByClassName('card');

            // Mengiterasi semua kartu dan menyembunyikan yang tidak sesuai dengan kriteria pencarian
            var count = 0;
            Array.from(cards).forEach(function(card) {
                var title = card.querySelector('.card-title').innerText.toUpperCase();
                if (title.indexOf(filter) > -1) {
                    card.style.display = '';
                    count++;
                } else {
                    card.style.display = 'none';
                }
            });

            // Memperbarui jumlah pelamar yang ditampilkan
            document.getElementById('totalCount').innerText = count;
        }
        
        function formatDate(dateString) {
            var date = new Date(dateString);
            var now = new Date();
            var diff = Math.abs(now - date);
            var days = Math.floor(diff / (1000 * 60 * 60 * 24));
            if (days === 1) {
                return '1 hari yang lalu';
            } else {
                return days + ' hari yang lalu';
            }
        }
    </script>
    <!-- SweetAlert CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

<!-- SweetAlert JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>
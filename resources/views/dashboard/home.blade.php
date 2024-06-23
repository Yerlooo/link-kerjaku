<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Perusahaan</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
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

        .container {
  text-align: center;
  margin-top: 25px;
}
.title {
  font-size: 24px;
  margin-bottom: 20px;
}
.progress-circle {
  position: relative;
  width: 200px;
  height: 200px;
  background: conic-gradient(#ffc300 0% 0%, #3a3a3a 0% 100%);
  border-radius: 50%;
  display: flex;
  justify-content: center;
  align-items: center;
  transition: background 1s ease-out;
  margin-left: 100px;
}
.progress-circle::before {
  content: '';
  position: absolute;
  width: 140px;
  height: 140px;
  background: #000;
  border-radius: 50%;
}
.progress-circle span {
  position: absolute;
  font-size: 32px;
  color: #fff;
  z-index: 10;
}
.legend {
  display: flex;
  justify-content: center;
  margin-top: 20px;
}
.legend div {
  display: flex;
  align-items: center;
  margin: 0 10px;
}
.legend div span {
  width: 16px;
  height: 16px;
  display: inline-block;
  margin-right: 8px;
  border-radius: 4px;
}
.legend .non-aktif span {
  background-color: #560bad;
}
.legend .aktif span {
  background-color: #ffc300;
}

.chart-heading {
  font-family: 'Rubik', sans-serif;
  color: #023047;
  text-transform: uppercase;
  font-size: 24px;
  text-align: center;
  margin-top: 25px;
}

.chart-container {
  width: 200px;
  margin-top: 25px;
}

.programming-stats {
  font-family: 'Rubik', sans-serif;
  display: flex;
  align-items: center;
  gap: 24px;
  margin: 0 auto;
  width: fit-content;
  box-shadow: 0 4px 12px -2px rgba(0, 0, 0, 0.3);
  border-radius: 20px;
  padding: 8px 32px;
  color: #023047;
  transition: all 400ms ease;
}

.programming-stats:hover {
  transform: scale(1.02);
  box-shadow: 0 4px 16px -7px rgba(0, 0, 0, 0.3);
}

.programming-stats .details ul {
  list-style: none;
  padding: 0;
}

.programming-stats .details ul li {
  font-size: 16px;
  margin: 12px 0;
  text-transform: uppercase;
}

.programming-stats .details .percentage {
  font-weight: 700;
  color: #e63946;
}

.container2 {
            margin-top: -1px;
        }
        .chart-container2 {
            position: relative;
            margin: auto;
            height: 80vh;
            width: 80vw;
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
                    <span style="color: #FCDC94;">Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-item" style="margin-top: 20px;">
        <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
            data-bs-target="#auth2" aria-expanded="false" aria-controls="auth2" id="dashboard-link">
            <i class="lni lni-apartment"></i>
            <span>Lowongan</span>
        </a>
        <ul id="auth2" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar" style="margin-top: 10px;">
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
                <img src="img/dashboard.png" alt="Home" width="26" height="26">
            </li>
                <li class="breadcrumb-item active" style="margin-left: 5px;" aria-current="page"><a href="/PageDashboard">Dashboard</a></li>
  </ol>
</nav>
    </div>

    <div class="d-flex align-items-center" style="position: relative; margin-left: 1065px; margin-top: -45px;">
    <a href="#" class="btn-btn d-flex align-items-center justify-content-center" role="button" style="width: 40px; height: 40px; border-radius: 50%; margin-left: 10px; margin-right: 10px;" title="Olivia Rhye">
        <img src="img/Google.jpg" alt="Profile Image" style="width: 45px; height: 45px; border-radius: 50%;">
    </a>
    @foreach ($users as $user)
    <span style="margin-left: 10px;">{{ $user->name }}</span>
    @endforeach
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
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                <img src="img/logout.png" alt="Profile Icon" width="16" height="16">
                <button class="btn btn-secondary ms-3" role="button" onclick="event.preventDefault(); confirmLogout(event)">
                    Logout
                </button>
      </div>
</div>



<section style="width: 1165px; height: 460px; background-color: #EBEDF0; margin-top: 55px; margin-left: 100px; display: flex; justify-content: space-between; padding: 0 20px; border-radius: 10px;">
<div style="width: 434px; height: 400px; background-color: #FFFFFF; border-radius: 10px; margin-top: 25px;">
  <div class="container">
    <div class="title">Lowongan Pekerjaan</div>
    <div class="progress-circle">
      <span>0%</span>
    </div>
    <div class="legend">
      <div class="non-aktif"><span></span>Non-aktif</div>
      <div class="aktif"><span></span>Aktif</div>
    </div>
  </div>
</div>
  <div style="width: 20px;"></div> <!-- Spasi antara card -->
  
  <div style="width: 465px; height: 400px; background-color: #FFFFFF; border-radius: 10px; margin-top: 25px;">

  <h2 class="chart-heading">Status Lowongan</h2>
  <div class="programming-stats">
    <div class="chart-container">
      <canvas class="my-chart"></canvas>
    </div>

    <div class="details">
      <ul></ul>
    </div>
  </div>

  <select style="width: 147px; height: 40px; border: 1px solid #000; border-radius: 4px; margin-top: 25px; margin-left: 25px;">
  <option value="uiux_designer">UI/UX Designer</option>
  <option value="frontend">Frontend</option>
  <option value="backend">Backend</option>
  <option value="digital_marketing">Digital Marketing</option>
</select>



</div>
</section>

<h2 class="chart-heading" style="margin-left: -900px; margin-top: 55px;">Overview</h2>
<div class="container2">
        <div class="chart-container2">
            <canvas id="funnelChart2"></canvas>
        </div>
    </div>

  

    <section style="margin-top: 55px; background-color: #E8F2F7; width: 1145px; height: 585px; margin-left: 115px; border-radius: 10px;">
  <span style="float: left; margin-left: 55px; margin-top: 55px; font-size: 25px;">Aktivitas</span>
  <select style="float: right; margin-top: 55px; margin-right: 55px; border-radius: 4px; width: 117px; height: 40px;">
    <option value="pilihan1">Minggu Ini</option>
    <option value="pilihan2">Pilihan 2</option>
    <option value="pilihan3">Pilihan 3</option>
    <option value="pilihan4">Pilihan 4</option>
  </select>

  <div style="clear:both;"></div>
  
  <table class="table" style="width: 1087px; height: 434px; background-color: #FFFFFF; margin: 20px auto; border-radius: 5px; box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);">
  <thead>
    <tr>
      <th scope="col" style="text-align: center;  padding-top: 25px;">Lowongan</th>
      <th scope="col" style="text-align: center;  padding-top: 25px;">Tanggal Diposting</th>
      <th scope="col" style="text-align: center;  padding-top: 25px;">Tanggal Kadaluarsa</th>
      <th scope="col" style="text-align: center;  padding-top: 25px;">Jumlah Pelamar</th>
    </tr>
  </thead>
  <tbody>
  <tr>
    <td style="text-align: center; vertical-align: middle; padding-top: 25px;" class="fw-bold">UI/UX Designer</td>
    <td style="text-align: center; vertical-align: middle; padding-top: 25px;">12/12/2024</td>
    <td style="text-align: center; vertical-align: middle; padding-top: 25px;">30/12/2024</td>
    <td style="text-align: center; vertical-align: middle; padding-top: 25px;">10 Pelamar</td>
</tr>

<tr>
    <td style="text-align: center; vertical-align: middle; padding-top: 25px;" class="fw-bold">Back-end</td>
    <td style="text-align: center; vertical-align: middle; padding-top: 25px;">01/10/2024</td>
    <td style="text-align: center; vertical-align: middle; padding-top: 25px;">30/10/2024</td>
    <td style="text-align: center; vertical-align: middle; padding-top: 25px;">20 Pelamar</td>
</tr>
<tr>
    <td style="text-align: center; vertical-align: middle; padding-top: 25px;" class="fw-bold">Front-end</td>
    <td style="text-align: center; vertical-align: middle; padding-top: 25px;">25/12/2024</td>
    <td style="text-align: center; vertical-align: middle; padding-top: 25px;">30/12/2024</td>
    <td style="text-align: center; vertical-align: middle; padding-top: 25px;">30 Pelamar</td>
</tr>
<tr>
    <td style="text-align: center; vertical-align: middle; padding-top: 25px;" class="fw-bold">Software Engineer</td>
    <td style="text-align: center; vertical-align: middle; padding-top: 25px;">06/12/2024</td>
    <td style="text-align: center; vertical-align: middle; padding-top: 25px;">30/12/2024</td>
    <td style="text-align: center; vertical-align: middle; padding-top: 25px;">40 Pelamar</td>
</tr>
  </tbody>
</table>


</section>



        
    </div>

</div>

    </div>

    <script>
        const ctx = document.getElementById('funnelChart2').getContext('2d');
        const funnelChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Total Pelamar', 'Sedang Diproses', 'Diterima'],
                datasets: [{
                    label: 'Jumlah',
                    data: [0, 0, 0], // Gantilah nilai ini dengan data yang sebenarnya
                    backgroundColor: [
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(153, 102, 255, 0.2)'
                    ],
                    borderColor: [
                        'rgba(75, 192, 192, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(153, 102, 255, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Fungsi untuk memperbarui data chart
        function updateFunnelChart(totalPelamar, sedangDiproses, diterima) {
            funnelChart.data.datasets[0].data = [totalPelamar, sedangDiproses, diterima];
            funnelChart.update();
        }

        // Contoh pemanggilan fungsi updateFunnelChart
        // Anda dapat memanggil fungsi ini dengan data yang diperoleh dari sumber lain (misalnya API)
        updateFunnelChart(200, 50, 20);
    </script>
    <script>
      const chartData = {
        labels: ['Wawancara', 'Penilaian', 'Ditolak', 'Diterima'],
        data: [39, 38, 10, 27, 22],
      };

      const myChart = document.querySelector('.my-chart');
      const ul = document.querySelector('.programming-stats .details ul');

      new Chart(myChart, {
        type: 'doughnut',
        data: {
          labels: chartData.labels,
          datasets: [
            {
              label: 'Language Popularity',
              data: chartData.data,
            },
          ],
        },
        options: {
          borderWidth: 10,
          borderRadius: 2,
          hoverBorderWidth: 0,
          plugins: {
            legend: {
              display: false,
            },
          },
        },
      });

      const populateUl = () => {
        chartData.labels.forEach((l, i) => {
          let li = document.createElement('li');
          li.innerHTML = `${l}: <span class='percentage'>${chartData.data[i]}%</span>`;
          ul.appendChild(li);
        });
      };

      populateUl();
    </script>

    <script>
function setProgress(percent) {
            const progressCircle = document.querySelector('.progress-circle');
            const span = progressCircle.querySelector('span');
            let currentPercent = 0;
            const interval = setInterval(() => {
                if (currentPercent >= percent) {
                    clearInterval(interval);
                } else {
                    currentPercent++;
                    span.textContent = `${currentPercent}%`;

                    const activePercent = Math.min(currentPercent, 50);
                    const additionalPercent = currentPercent > 50 ? currentPercent - 50 : 0;

                    if (currentPercent <= 50) {
                        progressCircle.style.background = `conic-gradient(
                            #FFC300 0% ${currentPercent}%, 
                            #3A3A3A ${currentPercent}% 100%
                        )`;
                    } else {
                        progressCircle.style.background = `conic-gradient(
                            #FFC300 0% 50%, 
                            #560BAD 50% ${currentPercent}%, 
                            #3A3A3A ${currentPercent}% 100%
                        )`;
                    }
                }
            }, 10); // Adjust the interval speed if needed
        }

        // Example: Set progress to 73% on page load
        document.addEventListener('DOMContentLoaded', () => {
            setProgress(73);
        });
    </script>

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

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script>
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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Lihat Lowongan</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">


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

    .text-clickable {
    cursor: pointer;
}

.text-clickable:hover {
    color: #FFC94A;
}

.card {
            cursor: pointer;
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
                        <span>Profile</span>
                    </a>
                </li>

                <li class="sidebar-item" style="margin-top: 20px;">
    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
        data-bs-target="#auth" aria-expanded="false" aria-controls="auth" id="dashboard-link">
        <i class="lni lni-protection"></i>
        <span style="color: blue;">Dashboard</span>
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
            <a href="#" class="sidebar-link" style="color: #6FDCE3;">
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



        <section style="background-color: #E8F2F7; padding: 20px; display: flex; justify-content: center; align-items: center; height: 100vh;">
        <div style="width: 1217px; height: 555px; background-color: #FFFFFF; box-shadow: 10px 10px 15px rgba(255, 0, 0, 0.5); border-radius: 10px; position: relative;">
            <img src="img/google.jpg" alt="Circular Image" style="width: 124px; height: 124px; border-radius: 50%; position: absolute; top: 55px; left: 85px; object-fit: cover;">
            <h1 style="position: absolute; top: 100px; left: 230px; font-size: 24px; color: #333;">Nama Perusahaan</h1>
            <p style="position: absolute; top: 100px; left: 555px; font-size: 24px; color: #333;">Baru saja</p>
            <!-- Content of the card goes here -->
            <h5 style="margin-top: 215px; margin-left: 235px; ">UI/UX Designer</h5>
            <p style="margin-top: 25px; margin-left: 235px; margin-right: 85px; text-align: justify;">
                UI/UX Designer adalah profesional yang bertanggung jawab untuk merancang antarmuka pengguna (UI) dan pengalaman pengguna (UX) pada produk digital seperti website, aplikasi mobile, dan software. Mereka bekerja sama dengan tim pengembang, peneliti, dan pemangku kepentingan lainnya untuk menciptakan produk yang mudah digunakan, intuitif, dan menyenangkan bagi pengguna.
            </p>
            <hr style="margin-top: 35px; margin-left: 55px; margin-right: 85px; border: 0; border-top: 2px solid #333;">
            <div style="display: flex; justify-content: center; margin-top: 35px;">
                <button style="padding: 10px 20px; font-size: 16px; margin-right: 10px; background-color: #FFC94A; color: #000000; border: none; border-radius: 5px; cursor: pointer; margin-right: 75px;">Edit</button>
                <button style="padding: 10px 20px; font-size: 16px; color: #000000; border: 2px solid #FFC94A; border-radius: 5px; cursor: pointer;">Hapus</button>
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
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>
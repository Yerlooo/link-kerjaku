<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pop Up Status</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <style>
    .card {
      width: 1300px;
      height: 575px;
      background-color: #ccc;
      margin-top: 100px;
    }
    .circle {
      width: 124px;
      height: 124px;
      background-color: #fff;
      border-radius: 50%;
      margin-top: 35px;
      float: left;
      margin-left: 100px;
      margin-bottom: 55px;
    }
    .content {
      margin-left: 255px;
      margin-top: -165px;
    }
    .icon {
      width: 32px;
      height: 32px;
      margin-right: 20px;
    }
    .read-more {
      display: none;
    }
    .paragraf5 {
        color: dimgrey;
    }
    .button-container {
        justify-content: space-between;
        margin: 20px;
        margin-left: 500px;
    }
    .button {
        background-color: #808080;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        text-decoration: none;
    }
    .button2 {
        background-color: #808080;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        margin-left: 55px;
        cursor: pointer;
        text-decoration: none;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="card">
      <div class="circle"></div>
      <div class="content">
        <h5 class="display-6">Olivia Rhye</h5>
        <div class="d-flex align-items-center" style="margin-top: 20px;">
          <img src="svg/instagram.svg" alt="Instagram" class="icon">
          <img src="svg/link.svg" alt="Link" class="icon">
          <img src="svg/facebook.svg" alt="Facebook" class="icon">
          <img src="svg/share.svg" alt="Twitter" class="icon ml-auto" style="margin-left: 600px; margin-top: -100px;">
          <img src="svg/save.svg" alt="YouTube" class="icon" style="margin-top: -100px;">
        </div>
      </div>
      <h6 class="mt-5" style="margin-left: 100px;">Tentang Saya</h6>
      <p class="paragraf5" style="margin-bottom: 10px; margin-left: 100px; margin-right: 60px;">
        Saya Olivia Rhye adalah seorang profesional yang ahli dalam Special Design UI/UX, Marketing Research, dan Digital Marketing. Dengan keahlian saya dalam desain yang menarik dan penelitian pasar yang teliti, serta kemampuan saya dalam strategi pemasaran digital, saya menghadirkan solusi-solusi yang efisien dan memikat.
        <span class="read-more">Saya juga memiliki pengalaman yang luas dalam proyek-proyek besar dan kecil, dan selalu siap untuk tantangan baru. Saya berkomitmen untuk memberikan hasil yang terbaik bagi setiap klien dan memastikan kepuasan mereka.</span>
        <a href="#" class="read-more-link" style="margin-left: 5px;">Read more</a>
    </p>
    
    <div style="margin-left: -55px;">
          <h6 class="mt-5" style="margin-left: 155px;">Riwayat Pendidikan</h6>
          <p class="paragraph paragraf5" style="margin-bottom: 10px; margin-left: 155px; margin-right: 60px;">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          </p>
        </div>

        <div style="margin-left: -25px;">
          <h6 style="margin-left: 575px; margin-top: -65px;">Keahlian</h6>
          <p class="paragraph paragraf5" style="margin-bottom: 10px; margin-left: 575px; margin-right: 60px;">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          </p>
        </div>

        <div style="margin-top: -65px;">
          <h6 style="margin-left: 1000px; ">Pengalaman</h6>
          <p class="paragraph paragraf5" style="margin-bottom: 10px; margin-left: 1000px; margin-right: 60px;">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          </p>
        </div>

        <div class="button-container" style="margin-top: 35px;">
    <button id="acceptButton" class="button">Terima</button>
    <button id="rejectButton" class="button2">Tolak</button>
</div>
    
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const readMoreLink = document.querySelector('.read-more-link');
      const readMoreText = document.querySelector('.read-more');

      readMoreLink.addEventListener('click', function(event) {
        event.preventDefault();
        if (readMoreText.style.display === 'none' || readMoreText.style.display === '') {
          readMoreText.style.display = 'inline';
          readMoreLink.textContent = 'Read less';
        } else {
          readMoreText.style.display = 'none';
          readMoreLink.textContent = 'Read more';
        }
      });

      const acceptButton = document.getElementById('acceptButton');
      const rejectButton = document.getElementById('rejectButton');

      acceptButton.addEventListener('click', function() {
        Swal.fire({
          icon: 'success',
          title: 'Terima kasih sudah menerima pelamar ini',
        }).then((result) => {
          if (result.isConfirmed) {
            window.location.href = '/StatusPelamar';
          }
        });
      });

      rejectButton.addEventListener('click', function() {
        Swal.fire({
          icon: 'error',
          title: 'Tidak menerima pelamar ini',
          text: '😢'
        });
      });
    });
  </script>
</body>
</html>
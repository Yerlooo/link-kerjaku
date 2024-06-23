<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Link-Kerjaku | Unggah Lowongan</title>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Logo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active ms-4" aria-current="page" href="/HomePagePerusahaan">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active ms-4" href="/StatusPelamar">Statu Pelamar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active ms-4" href="/about">Tentang Kami</a>
                </li>
            </ul>
            <div class="d-flex">
            <a href="/buatlowongan" class="btn btn-secondary me-2" style="background-color: #8DA4B8; color: #808080; text-decoration: none;">Buat Lowongan</a>
            <a href="/ProfillPerusahaan" class="btn btn-secondary d-flex align-items-center justify-content-center" role="button" style="width: 40px; height: 40px; background-color: #6c757d; border-radius: 50%; text-decoration: none; margin-left: 10px;">
        <img src="img/user.png" alt="Profile Image" style="width: 30px; height: 30px; border-radius: 50%;">
    </a>
</div>
        </div>
    </div>
</nav>

<!-- Section Pertama -->
<section style="background-color: #FFFFFF; padding: 70px; display: flex; flex-direction: column; align-items: flex-start;">
    <h2 style="text-align: left;">Deskripsi Lowongan</h2>
    <p>Silahkan edit berkas atau langsung menyimpan</p>
</section>
<!-- Section Akhir -->


<!-- Section Kedua -->
<section style="background-color: #B2C4D4; padding: 70px; display: flex; align-items: center; justify-content: center;">
    <div style="margin-left: 55px;">
        <h2 style="text-align: center;">Mengedit Postingan Baru</h2>
        <hr style="border: 1px solid black; margin-bottom: 20px;">
        <h6 style="text-align: left;">Judul Pekerjaan*</h6>
        <form>
            <input type="text" placeholder="Judul Pekerjaan" style="width: 100%; height: 40px; border: 1px solid black; border-radius: 8px; padding: 5px; margin-bottom: 20px;">
        </form>
        <h6 style="text-align: left; margin-top: 15px;">Detail Pekerjaan*</h6>
        <form>
            <input type="text" placeholder="Detail Pekerjaan" style="width: 100%; height: 40px; border: 1px solid black; border-radius: 8px; padding: 5px; margin-bottom: 20px;">
        </form>
        <h6 style="text-align: left; margin-top: 15px;">Alamat Email*</h6>
        <form>
            <input type="text" placeholder="Alamat Email" style="width: 100%; height: 40px; border: 1px solid black; border-radius: 8px; padding: 5px; margin-bottom: 20px;">
        </form>
        <h6 style="text-align: left; margin-top: 15px;">Nama Perusahaan*</h6>
        <form>
            <input type="text" placeholder="Nama Perusahaan" style="width: 100%; height: 40px; border: 1px solid black; border-radius: 8px; padding: 5px; margin-bottom: 20px;">
        </form>
        <h6 style="text-align: left; margin-top: 15px;">Jenis Pekerjaan*</h6>
        <form>
            <input type="text" placeholder="Jenis Pekerjaan" style="width: 100%; height: 40px; border: 1px solid black; border-radius: 8px; padding: 5px; margin-bottom: 20px;">
        </form>
        <h6 style="text-align: left; margin-top: 15px;">Keterampilan yang diperlukan*</h6>
        <form>
            <input type="text" placeholder="Keterampilan yang diperlukan" style="width: 100%; height: 40px; border: 1px solid black; border-radius: 8px; padding: 5px; margin-bottom: 20px;">
        </form>

        <div style="margin-top: 75px;">
        <h2 style="text-align: center;">Lihat Berkas</h2>
        <hr style="border: 1px solid black; margin-bottom: 20px;">
        <form style="margin-left: 100px;">
    <label for="file-upload" style="background-color: #FFFFFF; border: 1px solid #808080; border-radius: 8px; padding: 10px; width: 185px; height: 60px; display: flex; align-items: center; justify-content: center; cursor: pointer;">
        <img src="img/upload.jpg" alt="Unggah Berkas" style="width: 20px; height: 20px; margin-right: 5px;">
        <span style="margin-left: 5px;">Download</span>
        <input id="file-upload" type="file" style="display: none;">
    </label>
</form>
    </div>
    </div>
</section>
<!-- Section Akhir -->

<!-- Tambahan Section -->
<section style="background-color: #B2C4D4; padding: 70px; display: flex; align-items: center; justify-content: center;">
    <div style="margin-left: 55px;">
        <h2 style="text-align: center;">Informasi Lainnya</h2>
        <hr style="border: 1px solid black; margin-bottom: 20px;">
        <h6 style="text-align: left;">Jenis Kelamin*</h6>
        <form>
            <input type="text" placeholder="Jenis Kelamin" style="width: 100%; height: 40px; border: 1px solid black; border-radius: 8px; padding: 5px; margin-bottom: 20px;">
        </form>
        <h6 style="text-align: left; margin-top: 15px;">Pengalaman*</h6>
        <form>
            <input type="text" placeholder="Pengalaman" style="width: 100%; height: 40px; border: 1px solid black; border-radius: 8px; padding: 5px; margin-bottom: 20px;">
        </form>
        <h6 style="text-align: left; margin-top: 15px;">Posisi*</h6>
        <form>
            <input type="text" placeholder="Posisi" style="width: 100%; height: 40px; border: 1px solid black; border-radius: 8px; padding: 5px; margin-bottom: 20px;">
        </form>
        <h6 style="text-align: left; margin-top: 15px;">Jenjang Pendidikan*</h6>
        <form>
            <input type="text" placeholder="Jenjang Pendidikan" style="width: 100%; height: 40px; border: 1px solid black; border-radius: 8px; padding: 5px; margin-bottom: 20px;">
        </form>
    </div>
</section>
<!-- Tambahan Section -->

<!-- Tambahan Section -->
<section style="background-color: #B2C4D4; padding: 70px; display: flex; align-items: center; justify-content: center;">
    <div style="margin-left: 55px;">
        <h2 style="text-align: center;">Lokasi</h2>
        <hr style="border: 1px solid black; margin-bottom: 20px;">
        <h6 style="text-align: left;">Negara*</h6>
        <form>
            <input type="text" placeholder="Negara" style="width: 100%; height: 40px; border: 1px solid black; border-radius: 8px; padding: 5px; margin-bottom: 20px;">
        </form>
        <h6 style="text-align: left; margin-top: 15px;">Alamat Lengkap*</h6>
        <form>
            <input type="text" placeholder="Alamat Lengkap" style="width: 100%; height: 40px; border: 1px solid black; border-radius: 8px; padding: 5px; margin-bottom: 20px;">
        </form>
        <h6 style="text-align: left; margin-top: 15px;">Kode Pos*</h6>
        <form>
            <input type="text" placeholder="Kode Pos" style="width: 100%; height: 40px; border: 1px solid black; border-radius: 8px; padding: 5px; margin-bottom: 20px;">
        </form>
    </div>
</section>
<!-- Tambahan Section -->

<!-- Tambahan Section -->
<section style="background-color: #FFFFFF; padding: 25px; display: flex; align-items: center; justify-content: center;">
<a href="/editlowongan" style="text-decoration: none; margin-left: auto; margin-right: 855px; margin-top: 55px;">
    <button type="submit" style="background-color: #808080; border: none; border-radius: 8px; color: #FFFFFF; padding: 10px;">
        Edit Lowongan
    </button>
</a>
<a href="/simpanlowongan" style="text-decoration: none; margin-left: auto; margin-right: 100px; margin-top: 55px;">
    <button type="submit" style="background-color: #808080; border: none; border-radius: 8px; color: #FFFFFF; padding: 10px;">
        Simpan
    </button>
</a>
</section>
<!-- Tambahan Section -->


<!-- Footer -->
<footer style="background-color: #E9EBF8; padding: 30px;">
    <div class="container">
        <div class="row">
            <div class="col-md-3 mb-4">
                <!-- Logo -->
                <img src="path/to/logo.svg" alt="Logo" style="max-width: 100px;">
            </div>
            <div class="col-md-3 mb-4">
                <!-- Kategori -->
                <h5>Kategori</h5>
                <ul>
                    <li>Kategori 1</li>
                    <li>Kategori 2</li>
                    <li>Kategori 3</li>
                </ul>
            </div>
            <div class="col-md-3 mb-4">
                <!-- Tentang -->
                <h5>Tentang</h5>
                <ul>
                    <li>Tentang Kami</li>
                    <li>Tim Kami</li>
                    <li>Karir</li>
                </ul>
            </div>
            <div class="col-md-3 mb-4">
                <!-- Dukungan -->
                <h5>Dukungan</h5>
                <ul>
                    <li>Bantuan</li>
                    <li>FAQ</li>
                    <li>Hubungi Kami</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- Lorem10 -->
                <p>Lorem ipsum</p>
                <!-- Icon email, telefon, lokasi -->
                <div>
                <span><img src="svg/email.svg" width="25" alt="Email Icon"> Lorem ipsum</span>
                </div>
                <div>
                <span><img src="svg/telephone.svg" width="25" alt="Phone Icon"> Lorem ipsum</span>
                </div>
                <div>
                <span><img src="svg/location.svg" width="25" alt="Location Icon"> Lorem ipsum</span>
                </div>
            </div>
        </div>
        <hr style="margin-top: 20px;">
        <div class="row">
    <div class="col-md-6">
        <!-- Credit -->
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, iusto.</p>
    </div>
    <div class="col-md-6">
        <!-- Ikuti Kami -->
        <ul class="list-inline text-right" style="margin: 0; padding: 0; list-style: none;">
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
  </body>
</html>
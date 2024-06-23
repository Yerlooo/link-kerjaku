<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Application Result</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .container {
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
        }
        .title {
            text-align: center;
            margin-bottom: 20px;
        }
        .section-title {
            border-bottom: 2px solid #007bff;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        .list-group-item {
            border: none;
            padding: 8px 0;
        }
        .back-button {
            margin-top: 30px;
            text-align: center;
        }
        .img-preview {
            max-width: 100%;
            height: auto;
            margin-top: 10px;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="title">Job Application Result</h1>
        <p class="lead text-center">Terima kasih atas pengisian formulir. Berikut adalah detail pekerjaan yang Anda masukkan:</p>

        <div class="row">
            <div class="col-md-6">
                <h2 class="section-title">Informasi Diri</h2>
                <ul class="list-group">
                    <li class="list-group-item"><strong>Nama Lengkap:</strong> {{ $selfDescriptions['nama'] }}</li>
                    <li class="list-group-item"><strong>Deskripsi Diri:</strong> {{ $selfDescriptions['deskripsi_diri'] }}</li>
                    <li class="list-group-item"><strong>Pengalaman:</strong> {{ $selfDescriptions['pengalaman'] }}</li>
                    <li class="list-group-item"><strong>Soft Skill (Minimal 5):</strong> {{ $selfDescriptions['soft_skills'] }}</li>
                    <li class="list-group-item"><strong>Hard Skill (Minimal 5):</strong> {{ $selfDescriptions['hard_skills'] }}</li>
                </ul>
            </div>
            <div class="col-md-6">
                <h2 class="section-title">Informasi Domisili</h2>
                <ul class="list-group">
                    <li class="list-group-item"><strong>Kota:</strong> {{ $applicantLocation['kota'] }}</li>
                    <li class="list-group-item"><strong>Alamat Lengkap:</strong> {{ $applicantLocation['alamat_lengkap'] }}</li>
                    <li class="list-group-item"><strong>Kode Pos:</strong> {{ $applicantLocation['pos_code'] }}</li>
                </ul>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-6">
                <h2 class="section-title">Informasi Berkas dan Lain-lain</h2>
                <ul class="list-group">
                    <li class="list-group-item"><strong>Berapa kisaran gaji yang diharapkan?:</strong> {{ $moreInformation['gaji'] }}</li>
                    <li class="list-group-item">
                        <strong>Gambar Sertifikat:</strong><br>
                        <img src="{{ asset($moreInformation['img_sertifikat']) }}" alt="Gambar Sertifikat" class="img-preview">
                    </li>
                    <li class="list-group-item">
                        <strong>Gambar CV:</strong><br>
                        <img src="{{ asset($moreInformation['img_cv']) }}" alt="Gambar CV" class="img-preview">
                    </li>
                    <li class="list-group-item"><strong>Mengapa Anda tertarik dengan lowongan pekerjaan ini?</strong><br> {{ $moreInformation['reason'] }}</li>
                </ul>
            </div>
        </div>

        <!-- Tombol Kembali -->
        <div class="back-button">
            <a href="/link-kerjaku" class="btn btn-primary">Kembali ke Halaman Utama</a>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function() {
            Swal.fire({
                icon: 'success',
                title: 'Data berhasil diunggah!',
                showConfirmButton: false,
                timer: 1500  // Durasi pop-up SweetAlert
            });
        });

        document.addEventListener("DOMContentLoaded", function() {
        // Mendapatkan referensi elemen gambar sertifikat dan CV
        var imgSertifikat = document.querySelector("#img-sertifikat");
        var imgCV = document.querySelector("#img-cv");

        // Mengambil URL gambar dari data PHP (digunakan hanya sebagai contoh, sesuaikan dengan template Anda)
        var imgSertifikatURL = "{{ $moreInformation['img_sertifikat'] }}";
        var imgCVURL = "{{ $moreInformation['img_cv'] }}";

        // Memuat gambar sertifikat
        if (imgSertifikat && imgSertifikatURL) {
            imgSertifikat.src = imgSertifikatURL;
        }

        // Memuat gambar CV
        if (imgCV && imgCVURL) {
            imgCV.src = imgCVURL;
        }
    });
    </script>
</body>
</html>
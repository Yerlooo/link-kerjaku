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
                <h2 class="section-title">Detail Pekerjaan</h2>
                <ul class="list-group">
                    <li class="list-group-item"><strong>Judul Pekerjaan:</strong> {{ $jobProvider['job_title'] }}</li>
                    <li class="list-group-item"><strong>Detail Pekerjaan:</strong> {{ $jobProvider['job_description'] }}</li>
                    <li class="list-group-item"><strong>Alamat Email:</strong> {{ $jobProvider['email'] }}</li>
                    <li class="list-group-item"><strong>Nama Perusahaan:</strong> {{ $jobProvider['company_name'] }}</li>
                    <li class="list-group-item"><strong>Jenis Pekerjaan:</strong> {{ $jobProvider['job_type'] }}</li>
                    <li class="list-group-item"><strong>Keterampilan yang Diperlukan:</strong> {{ $jobProvider['required_skills'] }}</li>
                    <li class="list-group-item">
                        <strong>Gambar Berkas:</strong><br>
                        <img src="{{ asset($jobProvider['berkas']) }}" alt="Gambar Berkas" class="img-preview">
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <h2 class="section-title">Detail Pribadi</h2>
                <ul class="list-group">
                    <li class="list-group-item"><strong>Jenis Kelamin:</strong> {{ $informasilainnya['jenis_kelamin'] }}</li>
                    <li class="list-group-item"><strong>Pengalaman:</strong> {{ $informasilainnya['pengalaman'] }}</li>
                    <li class="list-group-item"><strong>Jenjang Pendidikan:</strong> {{ $informasilainnya['jenjang_pendidikan'] }}</li>
                </ul>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-6">
                <h2 class="section-title">Detail Alamat</h2>
                <ul class="list-group">
                    <li class="list-group-item"><strong>Negara:</strong> {{ $location['negara'] }}</li>
                    <li class="list-group-item"><strong>Alamat:</strong> {{ $location['alamat'] }}</li>
                    <li class="list-group-item"><strong>Kode Pos:</strong> {{ $location['pos_code'] }}</li>
                </ul>
            </div>
        </div>

        <!-- Tombol Kembali -->
        <div class="back-button">
            <a href="/Page-LowonganKerja" class="btn btn-primary">Kembali ke Halaman Utama</a>
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
    </script>
</body>
</html>

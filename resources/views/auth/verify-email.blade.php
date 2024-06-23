<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifikasi Email</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        .email-verification {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            text-align: center;
        }
        .email-verification img {
            width: 100px;
            height: auto;
        }
        .email-verification h1 {
            margin-top: 20px;
            font-weight: bold;
            color: #1a73e8;
            font-family: 'Roboto', sans-serif; /* Apply Roboto font */
        }
        .email-verification p {
            margin-top: 20px;
            color: #666;
            font-family: 'Roboto', sans-serif; /* Apply Roboto font */
        }
        .email-verification a {
            color: #1a73e8;
            text-decoration: none; /* Remove underline */
        }
        .email-verification a:hover {
            text-decoration: underline; /* Optional: Add underline on hover */
        }
        .custom-btn {
            margin-top: 20px;
            width: 601px;
            height: 58px;
            background-color: #126189;
            color: #000000; /* Set text color to black */
            border: none;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            font-size: 18px;
            border-radius: 6px;
        }
    </style>
</head>
<body>
        @if (session()->has('success'))
            <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil!',
                            text: "{{ session('success') }}",
                            showConfirmButton: false,
                            timer: 3000
                        });
                    });
                </script>
            @endif
    <div class="container email-verification">
        <h1>Cek Email Kamu</h1>
        <img src="img/frame.jpg" alt="Email Icon" style="width: 275px; height: 210px;">
        <p>Link verifikasi telah dikirimkan ke email kamu. segera cek email dan klik tombol <b>Verifikasi Email</b> agar bisa melanjutkan proses pendaftaran ke Link Kerjaku</p>
        <a href="/link-kerjaku" class="custom-btn" style="color: #FFFFFF;">Kembali Ke Login</a>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login Perusahaan</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        .form-group {
            margin-bottom: 1.5rem;
        }
        .input-group-text {
            display: flex;
            align-items: center;
        }
        .form-control {
            height: 45px;
            padding: 10px;
        }
        .btn-block {
            height: 45px;
        }
        .social-icons img {
            margin-right: 15px;
        }
    </style>
</head>
<body>
<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
            @if (session()->has('successperusahaan'))
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil!',
                            text: "{{ session('successperusahaan') }}",
                            showConfirmButton: false,
                            timer: 3000
                        });
                    });
                </script>
            @endif
            @if (session()->has('errorperusahaan'))
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: "{{ $errors->first('email') }}",
                            showConfirmButton: false,
                            timer: 3000
                        });
                    });
                </script>
            @endif

                <div class="card">
                    <div class="card-body text-center">
                        <img src="img/Logo.png" alt="Brand Logo" class="mb-4" style="width: 175px;">
                        <h2 class="mb-4" style="margin-top: -45px;">Login Sebagai Perusahaan</h2>
                        <form action="/login" method="post">
                            @csrf
                            <div class="form-group">
                                <div class="input-group" style="border: 1px solid #146D9A; background-color: #FFFFFF;">
                                    <div class="input-group-prepend" style="background-color: #FFFFFF;">
                                        <span class="input-group-text" style="background-color: #FFFFFF;"><img src="svg/email.svg" alt="Email Icon" width="20"></span>
                                    </div>
                                    <input type="email" class="form-control" name="email" placeholder="Masukkan Alamat Email Anda" style="border: none; background-color: #FFFFFF;" autofocus required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group" style="border: 1px solid #146D9A; background-color: #FFFFFF;">
                                    <div class="input-group-prepend" style="background-color: #FFFFFF;">
                                        <span class="input-group-text" style="background-color: #FFFFFF;"><img src="svg/password.svg" alt="Password Icon" width="20"></span>
                                    </div>
                                    <input type="password" class="form-control" name="password" placeholder="Masukkan Kata Sandi Anda" style="border: none; background-color: #FFFFFF;" required>
                                </div>
                            </div>
                            <a href="/PageDashboard" style="text-decoration: none;">
                            <button type="submit" class="btn btn-secondary btn-block" style="background-color: #146D9A;">Masuk</button>
                            </a>
                            <div class="mt-5 social-icons">
                                <img src="svg/google.svg" alt="Google Icon" width="30">
                                <img src="svg/facebook.svg" alt="Facebook Icon" width="30">
                                <img src="svg/apple.svg" alt="Apple Icon" width="30">
                            </div>
                            <p class="mt-5">Belum punya akun? <a href="/daftar-perusahaan" style="color: blue;">Daftar</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
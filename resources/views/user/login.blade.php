<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
            
            @if (session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                </button>
                </div>
            @endif

                <div class="card">
                    <div class="card-body text-center">
                    <img src="img/Logo.png" alt="Brand Logo" class="mb-4" style="width: 175px;">
                    <h2 class="mb-4" style="margin-top: -45px;">Login Sebagai Pelamar</h2>
                        <form action="/login" method="post">
                        @csrf
                            <div class="form-group">
                                <div class="input-group" style="border: 1px solid #146D9A; background-color: #FFFFFF;">
                                    <div class="input-group-prepend" style="background-color: #FFFFFF;">
                                        <span class="input-group-text" style="background-color: #FFFFFF;"><img src="svg/email.svg" alt="Email Icon" width="20"></span>
                                    </div>
                                    <input type="email" class="form-control
                                    @error('email')
                                    is-invalid
                                    @enderror"
                                    name="email" placeholder="Masukkan Alamat Email Anda" style="border: none; background-color: #FFFFFF;" autofocus required value="{{old('email')}}">
                                    @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group" style="border: 1px solid #146D9A; background-color: #FFFFFF;">
                                    <div class="input-group-prepend" style="background-color: #FFFFFF;">
                                        <span class="input-group-text" style="background-color: #FFFFFF;"><img src="svg/password.svg" alt="Password Icon" width="20"></span>
                                    </div>
                                    <input type="password" class="form-control
                                    @error('password')
                                    is-invalid
                                    @enderror"
                                    name="password" placeholder="Masukkan Kata Sandi Anda" style="border: none; background-color: #FFFFFF;" required>

                                    @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror

                                </div>
                            </div>
                            <button class="btn btn-secondary btn-block" style="background-color: #146D9A;" type="submit">Masuk</button>
                            <div class="mt-5">
                                <a href="{{ route('google.redirect') }}"><img src="svg/google.svg" alt="Google Icon" width="30" class="mr-3"></a>
                                <a href="{{ route('auth.facebook') }}"><img src="svg/facebook.svg" alt="Facebook Icon" width="30" class="mr-3"></a>
                                <img src="svg/apple.svg" alt="Apple Icon" width="30">
                            </div>
                            <p class="mt-5">Belum punya akun? <a href="/register" style="color: blue;">Daftar</a></p>
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

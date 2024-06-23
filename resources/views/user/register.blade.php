<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Register</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .form-group {
            margin-bottom: 1.5rem;
        }
        .input-group-text, .input-group-append button {
            display: flex;
            align-items: center;
            background-color: #FFFFFF;
        }
        .form-control {
            height: 45px;
            padding: 10px;
        }
        .btn-block {
            height: 45px;
        }
        .text-left {
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body text-center">
                        <img src="img/Logo.png" alt="Brand Logo" class="mb-4" style="width: 175px;">
                        <h2 class="mb-4" style="margin-top: -45px;">Daftar Sebagai Pelamar</h2>
                        <form action="/register" method="post">
                        @csrf
                        <div class="form-group">
                            <div class="input-group" style="border: 1px solid #146D9A;">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><img src="svg/profile.svg" alt="Profile Icon" width="20"></span>
                                    </div>
                                    <input type="text" class="form-control 
                                    @error('name') is-invalid                                        
                                    @enderror" 
                                    name="name" placeholder="Masukkan Nama Anda" autofocus required style="border: none;" value="{{ old('name') }}">
                                    @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group" style="border: 1px solid #146D9A;">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><img src="svg/email.svg" alt="Email Icon" width="20"></span>
                                    </div>
                                    <input type="email" class="form-control
                                    @error('email') is-invalid                                        
                                    @enderror"
                                    name="email"  placeholder="Masukkan Alamat Email Anda" style="border: none;" required value="{{ old('email') }}">
                                    @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group" style="border: 1px solid #146D9A;">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <img src="svg/password.svg" alt="Password Icon" width="20">
                                        </span>
                                    </div>
                                    <input type="password" class="form-control
                                    @error('password') is-invalid                                        
                                    @enderror" 
                                    name="password" placeholder="Masukkan Kata Sandi Anda" style="border: none;" required>
                                    @error('password')
                                    <div class="invalid-feedback">
                                    {{ $message }}
                                    </div>
                                    @enderror
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary toggle-password" type="button">
                                            <img src="svg/eye.svg" alt="Toggle Password" width="20">
                                        </button>
                                            </div>
                                                </div>
                                                    <p class="text-left">Kata sandi minimal terdiri dari 8 karakter</p>
                                                    </div>
                                                    <div class="form-group">
                                                    <div class="input-group" style="border: 1px solid #146D9A;">
                                                    <div class="input-group-prepend">
                                                <span class="input-group-text">
                                            <img src="svg/password.svg" alt="Password Icon" width="20">
                                        </span>
                                    </div>
                                    <input type="password" class="form-control
                                    @error('password_confirmation') is-invalid                                        
                                    @enderror" 
                                    name="password_confirmation" placeholder="Konfirmasi kata sandi" required style="border: none;">
                                    @error('password_confirmation')
                                    <div class="invalid-feedback">
                                    {{ $message }}
                                    </div>
                                    @enderror
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary toggle-password" type="button">
                                            <img src="svg/eye.svg" alt="Toggle Password" width="20">
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-secondary btn-block" style="background-color: #146D9A;" type="submit">Buat Akun</button>
                            <p class="mt-5">Sudah punya akun? <a href="/login" style="color: blue;">Login</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        var togglePasswordBtns = document.querySelectorAll('.toggle-password');
        
        togglePasswordBtns.forEach(function(btn) {
            btn.addEventListener('click', function() {
                var passwordInput = this.parentElement.previousElementSibling;
                if (passwordInput.type === 'password') {
                    passwordInput.type = 'text';
                    this.innerHTML = '<img src="svg/eye.svg" alt="Hide Password" width="20">';
                } else {
                    passwordInput.type = 'password';
                    this.innerHTML = '<img src="svg/eye.svg" alt="Show Password" width="20">';
                }
            });
        });
    });
</script>

    <!-- Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

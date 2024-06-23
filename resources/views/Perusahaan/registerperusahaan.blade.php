<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Register Perusahaan</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body text-center">
                        <img src="brand_logo.png" alt="Brand Logo" class="mb-4">
                        <h2 class="mb-4">Daftar</h2>
                        <form action="/registerperusahaan" method="post">
                        @csrf
                        <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><img src="svg/profile.svg" alt="profile icon" width="20"></span>
                                    </div>
                                    <input type="name" class="form-control" name="name" placeholder="Masukkan Nama Anda" autofocus required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><img src="svg/email.svg" alt="Email Icon" width="20"></span>
                                    </div>
                                    <input type="email" class="form-control" name="email" placeholder="Masukkan Alamat Email Anda" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <img src="svg/password.svg" alt="Password Icon" width="20">
                                        </span>
                                    </div>
                                    <input type="password" class="form-control" name="password" placeholder="Masukkan Kata Sandi Anda" required>
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary toggle-password" type="button">
                                            <img src="svg/eye.svg" alt="Toggle Password" width="20">
                                        </button>
                                    </div>
                                </div>
                                <p class="text-left">Kata sandi minimal terdiri dari 8 karakter</p>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <img src="svg/password.svg" alt="Password Icon" width="20">
                                        </span>
                                    </div>
                                    <input type="password" class="form-control" name="password_confirm" placeholder="Konfirmasi kata sandi" required>
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary toggle-password" type="button">
                                            <img src="svg/eye.svg" alt="Toggle Password" width="20">
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-secondary btn-block" style="background-color: #146D9A;" type="submit">Buat Akun</button>
                            <p class="mt-5">Sudah punya akun? <a href="/loginperusahaan" style="color: blue;">Login</a></p>
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
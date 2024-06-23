<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login Perusahaan</title>
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
                        <h2 class="mb-4">Masuk</h2>
                        <form action="/loginperusahaan" method="post">
                            @csrf
                        <div class="form-group">
    <div class="input-group" style="border: 1px solid #146D9A; background-color: #FFFFFF;">
        <div class="input-group-prepend" style="background-color: #FFFFFF;">
            <span class="input-group-text" style="background-color: #FFFFFF;"><img src="svg/email.svg" alt="Email Icon" width="20"></span>
        </div>
        <input type="email" class="form-control" name="email" placeholder="Masukkan Alamat Email Anda" style="border: none; background-color: #FFFFFF;">
    </div>
</div>
<div class="form-group">
    <div class="input-group" style="border: 1px solid #146D9A; background-color: #FFFFFF;">
        <div class="input-group-prepend" style="background-color: #FFFFFF;">
            <span class="input-group-text" style="background-color: #FFFFFF;"><img src="svg/password.svg" alt="Password Icon" width="20"></span>
        </div>
        <input type="password" class="form-control" name="password" placeholder="Masukkan Kata Sandi Anda" style="border: none; background-color: #FFFFFF;">
    </div>
</div>

                            <button class="btn btn-secondary btn-block" type="submit">Masuk</button>
                            <div class="mt-5">
                                <img src="svg/google.svg" alt="Google Icon" width="30" class="mr-3">
                                <img src="svg/facebook.svg" alt="Facebook Icon" width="30" class="mr-3">
                                <img src="svg/apple.svg" alt="Apple Icon" width="30">
                            </div>
                            <p class="mt-5">Belum punya akun? <a href="/registerperusahaan" style="color: blue;">Daftar</a></p>
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
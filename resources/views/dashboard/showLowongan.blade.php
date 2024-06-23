<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="card">
    <h5 class="card-title">{{ $lowongan->nama_pekerjaan }}</h5>
    <p>Perusahaan: {{ $lowongan->perusahaan }}</p>
    <p>{{ $lowongan->deskripsi }}</p>
    <p>Tipe Pekerjaan: {{ $lowongan->tipe_pekerjaan }}</p>
</div>
</body>
</html>
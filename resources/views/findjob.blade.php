<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pencarian Pekerjaan</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <section style="background-color: #FFFFFF; padding: 60px; text-align: center;">
        <div class="container">
            <div class="row">
                <div class="col">
                    <form id="search-form" style="width: 250px; height: 58px; margin-bottom: 50px; margin-left: 30px;">
                        <input type="text" id="search-keyword" placeholder="Pencarian" style="border: none; width: 235px; height: 40px; margin-left: 15px; background-color: #E9EBF8; border-radius: 8px;">
                    </form>
                </div>
                <div class="col">
                    <form style="width: 250px; height: 58px; margin-bottom: 20px;">
                        <select id="search-location" style="border: none; width: 235px; height: 40px; margin-left: 15px; background-color: #E9EBF8; border-radius: 8px;">
                            <option value="">Lokasi</option>
                            <option value="jakarta">Jakarta</option>
                            <option value="bandung">Bandung</option>
                            <option value="surabaya">Surabaya</option>
                            <option value="yogyakarta">Yogyakarta</option>
                        </select>
                    </form>
                </div>
                <div class="col">
                    <form style="width: 250px; height: 58px; margin-bottom: 20px;">
                        <select id="search-job-type" style="border: none; width: 235px; height: 40px; margin-left: 15px; background-color: #E9EBF8; border-radius: 8px;">
                            <option value="">Tipe Pekerjaan</option>
                            <option value="full-time">Full-time</option>
                            <option value="part-time">Part-time</option>
                            <option value="magang">Magang</option>
                            <option value="kontrak">Kontrak</option>
                        </select>
                    </form>
                </div>
                <div class="col">
                    <form style="width: 250px; height: 58px; margin-bottom: 20px;">
                        <select id="search-experience" style="border: none; width: 235px; height: 40px; margin-left: 15px; background-color: #E9EBF8; border-radius: 8px;">
                            <option value="">Pengalaman</option>
                            <option value="baru-graduan">Baru Graduan</option>
                            <option value="1-2-tahun">1-2 Tahun</option>
                            <option value="3-5-tahun">3-5 Tahun</option>
                            <option value="lebih-dari-5-tahun">Lebih dari 5 Tahun</option>
                        </select>
                    </form>
                </div>
                <div class="col">
                    <button type="button" id="search-button" class="btn" style="background-color: #808080; color: #FFFFFF; width: 100px; height: 40px;">Cari</button>
                </div>
            </div>
        </div>
    </section>

    <section id="search-results" style="padding: 60px; text-align: center; display: none;">
        <div class="container">
            <h2>Hasil Pencarian</h2>
            <div id="results-container" class="row">
                <!-- Hasil pencarian akan ditambahkan di sini -->
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        document.getElementById('search-button').addEventListener('click', function () {
    // Ambil nilai dari input
    const keyword = document.getElementById('search-keyword').value;
    const location = document.getElementById('search-location').value;
    const jobType = document.getElementById('search-job-type').value;
    const experience = document.getElementById('search-experience').value;

    // Mockup data hasil pencarian
    const jobs = [
        {
            job_title: 'Software Engineer',
            job_description: 'Mengembangkan dan memelihara aplikasi web.',
            email: 'hr@company.com',
            company_name: 'Tech Company',
            job_type: 'Full-time',
            required_skills: 'JavaScript, HTML, CSS',
            location: 'Jakarta',
            experience: '1-2 Tahun'
        },
        {
            job_title: 'Graphic Designer',
            job_description: 'Membuat desain grafis untuk berbagai proyek.',
            email: 'design@agency.com',
            company_name: 'Creative Agency',
            job_type: 'Part-time',
            required_skills: 'Photoshop, Illustrator',
            location: 'Bandung',
            experience: 'Baru Graduan'
        }
        // Tambahkan lebih banyak data pekerjaan sesuai kebutuhan
    ];

    // Filter hasil pencarian berdasarkan input pengguna
    const filteredJobs = jobs.filter(job => {
        return (
            (keyword === '' || job.job_title.toLowerCase().includes(keyword.toLowerCase())) &&
            (location === '' || job.location.toLowerCase() === location.toLowerCase()) &&
            (jobType === '' || job.job_type.toLowerCase() === jobType.toLowerCase()) &&
            (experience === '' || job.experience.toLowerCase() === experience.toLowerCase())
        );
    });

    // Tampilkan hasil pencarian
    const resultsContainer = document.getElementById('results-container');
    resultsContainer.innerHTML = '';
    if (filteredJobs.length > 0) {
        filteredJobs.forEach(job => {
            const jobElement = document.createElement('div');
            jobElement.classList.add('col-md-4');
            jobElement.innerHTML = `
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">${job.job_title}</h5>
                        <p class="card-text">${job.job_description}</p>
                        <p><strong>Perusahaan:</strong> ${job.company_name}</p>
                        <p><strong>Email:</strong> ${job.email}</p>
                        <p><strong>Jenis Pekerjaan:</strong> ${job.job_type}</p>
                        <p><strong>Keterampilan yang Diperlukan:</strong> ${job.required_skills}</p>
                        <p><strong>Lokasi:</strong> ${job.location}</p>
                        <p><strong>Pengalaman:</strong> ${job.experience}</p>
                    </div>
                </div>
            `;
            resultsContainer.appendChild(jobElement);
        });
    } else {
        resultsContainer.innerHTML = '<p>Tidak ada hasil ditemukan</p>';
    }

    // Tampilkan bagian hasil pencarian
    document.getElementById('search-results').style.display = 'block';
});

    </script>
</body>
</html>

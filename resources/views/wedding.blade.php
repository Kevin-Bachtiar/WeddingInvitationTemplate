<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedding Invitation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Load SCSS dari Vite -->
    @vite(['resources/scss/app.scss'])

    <!-- Font Google untuk Tipografi -->
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
</head>
<body class="bg-light">

<div class="d-flex justify-content-center align-items-center">
    <div class="centered-content bg-white rounded shadow-lg text-center">
        <!-- Main Title -->
        <div class="title">
            <h3 class="fw-bold text-uppercase">Maha Suci Allah SWT Yang Telah Menciptakan Mahluk-Nya Berpasang-Pasangan.</h3>
            <p class="mt-3">Ya Allah, Semoga Ridho-Mu Mengiringi Pernikahan Putra-Putri Kami :</p>
        </div>        


        <div class="couple-details row text-center text-md-start justify-content-center" style="background: url('{{ asset('assets/bluepetal3.png') }}') no-repeat center center; background-size: cover;">
            <div class="card-couple animate-fade-slide">
                <div class="col-md-5 mb-4 animate-fade-slide animate-delay-1">
                    <div class="p-3">
                        <h5 class="name-highlight mb-1">Choyrun Nisa Putri</h5>
                        <p class="parents text-muted mb-1"><em>Putri Bapak Muhadjir & Ibu Sri Weni</em></p>
                        <p class="address small fst-italic text-secondary">(Jl. Rungkut Kidul Gg. 2/20, Rungkut, Surabaya)</p>
                    </div>
                </div>
        
                <div class="col-md-2 d-flex align-items-center justify-content-center mb-4 animate-fade-slide animate-delay-2">
                    <div class="with-divider text-center">
                        <span class="text-uppercase text-secondary fw-semibold">Dengan</span>
                        <hr class="divider mx-auto my-1" />
                    </div>
                </div>
        
                <div class="col-md-5 mb-4 animate-fade-slide animate-delay-3">
                    <div class="p-3">
                        <h5 class="name-highlight mb-1">Kevin Marvello Bachtiar</h5>
                        <p class="parents text-muted mb-1"><em>Putra Bapak Gunawan Bachtiar & Ibu Jalmin Naki</em></p>
                        <p class="address small fst-italic text-secondary">(Jl. Rajawali VI No. 18A, Bukit Tunggal, Palangka Raya)</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="reception-invitation">
            <div class="reception-header">
                <p class="reception-title">RESEPSI</p>
                <h2 class="main-title">Sabtu, 03 Mei 2025</h2>
                <p class="sub-title">Pukul: 12.00 WIB - Selesai</p>
            </div>
        
            <div class="reception-details">
                <div class="event-info">
                    <p class="event-title">Tempat:</p>
                    <p class="event-location">Rumah Mempelai Wanita</p>
                    <p class="event-address">Jl. Rungkut Kidul Gg 2/20, Surabaya</p>
                </div>
            </div>
        
            <div class="thank-you">
                <p>Atas kehadiran dan doa restu Bapak/Ibu/Saudara/i, kami ucapkan terima kasih.</p>
            </div>
        
            <div class="families">
                <p>Kel. Bapak Muhadjir & Ibu Sri Weni</p>
                <p>Kel. Bapak Gunawan Bachtiar & Ibu Jalmin Naki</p>
            </div>
        </div>
        

        <!-- Google Maps Embed -->
        <div class="map-container mt-4">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.227745395364!2d112.76533797400229!3d-7.328298492680017!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fade63a9919b%3A0x853e35aed1362ab6!2sJl.%20Rungkut%20Kidul%20Gg.%202%20No.20%2C%20Rungkut%20Kidul%2C%20Kec.%20Rungkut%2C%20Surabaya%2C%20Jawa%20Timur%2060293!5e0!3m2!1sid!2sid!4v1745854002202!5m2!1sid!2sid" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>

        <!-- Google Maps Link -->
        <div class="map-container m-3">
            <a href="https://maps.app.goo.gl/5vN1RQqLnbYeFPaP7" target="_blank" class="btn btn-primary px-4 py-2 rounded-pill shadow-lg">Open in Google Maps</a>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

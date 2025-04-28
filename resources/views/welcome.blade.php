<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedding Invitation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Load SCSS dari Vite -->
    @vite(['resources/scss/app.scss'])
</head>
<body>

<!-- Bunga hiasan -->
<div class="flower flower-1">
    <div class="petal petal-1"></div>
    <div class="petal petal-2"></div>
    <div class="petal petal-3"></div>
    <div class="petal petal-4"></div>
    <div class="center"></div>
</div>
<div class="flower flower-2">
    <div class="petal petal-1"></div>
    <div class="petal petal-2"></div>
    <div class="petal petal-3"></div>
    <div class="petal petal-4"></div>
    <div class="center"></div>
</div>
<div class="flower flower-3">
    <div class="petal petal-1"></div>
    <div class="petal petal-2"></div>
    <div class="petal petal-3"></div>
    <div class="petal petal-4"></div>
    <div class="center"></div>
</div>
<div class="flower flower-4">
    <div class="petal petal-1"></div>
    <div class="petal petal-2"></div>
    <div class="petal petal-3"></div>
    <div class="petal petal-4"></div>
    <div class="center"></div>
</div>

<div class="d-flex justify-content-center align-items-center w-100 h-100">
    <div class="centered-content">
        <!-- Main Title -->
        <div class="title">
            Maha Suci Allah SWT Yang Telah Menciptakan Mahluk-Nya Berpasang-Pasangan.
            <p>Ya Allah, Semoga Ridho-Mu Mengiringi Pernikahan Putra-Putri Kami :</p>
        </div>

        <!-- Couple Details -->
        <div class="sub-title">
            <strong class="name-highlight">Choyrun Nisa Putri</strong>
            <div class="details">
                <span>Putri Bapak Muhadjir & Ibu Sri Weni</span>
                <span>(Jl. Rungkut Kidul Gang 2/20, Kelurahan Rungkut Kidul, Rungkut, Kota Surabaya)</span>
            </div>

            <div class="sub-title mt-4">
                <strong>Dengan</strong>
            </div>

            <strong class="name-highlight">Kevin Marvello Bachtiar</strong>
            <div class="details">
                <span>Putra Bapak Gunawan Bachtiar & Ibu Jalmin Naki</span>
                <span>(Jl. Rajawali VI No. 18A, Kelurahan Bukit Tunggal, Kecamatan Jekan Raya, Kota Palangka Raya)</span>
            </div>
        </div>

        <!-- Event Details -->
        <div class="event-details">
            <p>AKAD NIKAH</p>
            <span>Jumat, 25 April 2025</span>
            <span>Palangkaraya, Kalimantan</span>
        </div>

        <!-- Google Maps Embed -->
        <div class="map-container mt-4">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.227745395364!2d112.76533797400229!3d-7.328298492680017!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fade63a9919b%3A0x853e35aed1362ab6!2sJl.%20Rungkut%20Kidul%20Gg.%202%20No.20%2C%20Rungkut%20Kidul%2C%20Kec.%20Rungkut%2C%20Surabaya%2C%20Jawa%20Timur%2060293!5e0!3m2!1sid!2sid!4v1745854002202!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <!-- Google Maps Link -->
        <div class="map-container mt-4">
            <a href="https://maps.app.goo.gl/5vN1RQqLnbYeFPaP7" target="_blank" class="btn btn-primary">Open in Google Maps</a>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedding Invitation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Open+Sans&display=swap" rel="stylesheet">

    <!-- Load SCSS dari Vite -->
    @vite(['resources/scss/app.scss'])
</head>
<body class="welcome d-flex flex-column align-items-center justify-content-center text-center">

    <div class="fade-in">
        <h1 class="title">Undangan Pernikahan</h1>
        <h2 class="names m-3">Kevin & Nisa</h2>
    </div>

    <div class="wedding-image fade-in-delay">
        <img src="{{ asset('assets/example.jpg') }}" alt="Example" class="img-fluid rounded-4 shadow">
    </div>    

    <div class="invitation-text fade-in-delay-2">
        <p>Teriring rasa syukur dan mengharap ridho <br> Allah Subhanahu Wa Ta'ala,</p>
        <p>Kami mengundang Bapak/Ibu/Sahabat <br> untuk hadir pada acara pernikahan kami.</p>
    </div>

    <div class="fade-in-delay-3 m-3">
        <a class="btn btn-primary px-4 py-2 fs-5 rounded-pill shadow" href="{{ route('wedding') }}">
            Buka Undangan
        </a>
    </div>

    <div class="background-image fade-in-delay pt-3">
        <img src="{{ asset('assets/blueflower5.png') }}" alt="Example" class="img-fluid">
    </div>

</body>
</html>

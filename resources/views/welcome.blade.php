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
<body class="welcome">

    <div class="full-wrapper d-flex flex-column justify-content-center align-items-center text-center">
      
        <div class="background-image-top fade-in-delay">
            <img src="{{ asset('assets/bluebunga.png') }}" alt="Example" class="img-fluid">
          </div>

          
      <div class="fade-in pt-5 mt-3">
        <h1 class="title pt-5">Undangan Pernikahan</h1>
        <h2 class="names m-3 pt-3 justify-content-center">
            <span class="name-kevin text-center">Kevin</span>
            <span class="and-separator"> <br>&nbsp;&amp;&nbsp;</span>
            <br>
            <span class="name-nisa text-center">Nisa</span>
        </h2>                  
      </div>
  
      <div class="invitation-text fade-in-delay-2">
        <p class="main-text">Kami mengundang Bapak/Ibu/Sahabat</p>
        <p class="main-text">untuk hadir pada acara pernikahan kami.</p>
      </div>      
  
      <div class="fade-in-delay-3 m-3">
        <a class="btn btn-primary px-4 py-2 fs-5 rounded-pill shadow" href="{{ route('wedding') }}">
          Buka Undangan
        </a>
      </div>
  
    </div>
  
    <div class="background-image fade-in-delay pt-3">
      <img src="{{ asset('assets/blueflower5.png') }}" alt="Example" class="img-fluid">
    </div>
  
  </body>
  
</html>

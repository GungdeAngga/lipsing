<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>lipsing</title>
    <link rel="stylesheet" href="css.style">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  
    {{-- ini AOS --}}
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    {{-- ini style untuk css tambahan --}}
    <style>
      .custom-rectangle {
      width: auto; /* Lebar disesuaikan dengan konten */
      background: linear-gradient(90deg, #219C90 0%, #027c97 100%);
      }

       .navbar {
      /* background-color: #219C90; */
      background: linear-gradient(90deg, #219C90 0%, #027c97 100%); /* Contoh transparansi 50% */
      }

      .card-jenis-investasi {
      width: 200px;
      height: 200px;
      flex-shrink: 0;
      border-radius: 50%;
      background: #FFF;
      box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.25);
      }

    </style>
    {{-- akhir --}}

  </head>
  <body class="body">
    
    
    {{-- navbar --}}
    @include('partials.navbar')
    {{-- navbar --}}

    {{-- isi konten --}}
    @yield('content')
    {{-- isi konten --}}

    {{-- footer --}}
    @include('partials.footer')
    {{-- footer --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    {{-- ini AOS --}}
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>
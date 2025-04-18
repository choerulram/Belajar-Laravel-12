<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Belajar Laravel 12 | Achmada Choerul Ramdhani</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
  <body>
    {{-- @include -> untuk memanggil file lain 
         @yied -> tempat kosong untuk di isi konten tampilan lain
         @extends -> file ini menggunakan layoout tertentu
         @section/@endsection -> mengisi conten dari @yield     
    --}}
    {{-- start navbar --}}
    @include('layouts.navbar')
    {{-- end navbar --}}

    {{-- start container --}}
    <div class="container mt-3">
        {{-- isi content --}}
        @yield('konten')
    </div>
    {{-- end container --}}

    {{-- start footer --}}
    @include('layouts.footer')
    {{-- end footer --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>
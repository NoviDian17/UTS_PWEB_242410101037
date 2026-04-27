<!DOCTYPE html>
<html>
<head>
    <title>Manajemen Pengelolaan Stok Anggur GrapeIn</title>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <x-navbar />

    <main class="container">
        @yield('content')
    </main>
  
    @include('components.footer')

</body>
</html>
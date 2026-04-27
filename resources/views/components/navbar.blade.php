<nav class="navbar">
    <h2>Manajemen GrapeIn</h2>

    @if(request()->path() != '/')
    <div class="nav-menu">
        <a href="/dashboard">Dashboard</a>
        <a href="/pengelolaan">Produk GrapeIn</a>
        <a href="/profile">Profilku</a>
    </div>
    @endif

</nav>
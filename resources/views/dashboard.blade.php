@extends('layouts.app')

@section('content')

<div class="card" style="background:#6a0dad; color:white;">
    <h1>Dashboard</h1>
    <p>Welcome, <b>{{ ucfirst($username) }}</b></p>
</div>

<div class="card">
    <h2>Menu</h2>

    <div class="menu-buttons">
        
        <a href="/pengelolaan?username={{ request('username') }}" style="
            flex:1;
            text-align:center;
            padding:15px;
            background:#9b59b6;
            color:white;
            border-radius:10px;
        ">
            Produk GrapeIn
        </a>
    
        <a href="/profile?username={{ request('username') }}" style="
            flex:1;
            text-align:center;
            padding:15px;
            background:#9b59b6;
            color:white;
            border-radius:10px;
        ">
            Profilku
        </a>

        <a href="/ceo?username={{ request('username') }}" style="
            flex:1;
            text-align:center;
            padding:15px;
            background:#9b59b6;
            color:white;
            border-radius:10px;
        ">
            Profil CEO
        </a>

    </div>
<br>
</div>

<div style="text-align:center; margin-top:20px;">
    <a href="/" class="logout-btn">
        Logout
    </a>
</div>

@endsection
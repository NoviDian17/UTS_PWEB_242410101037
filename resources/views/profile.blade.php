@extends('layouts.app')

@section('content')

<div class="card profile-card">
    <h1>Profilku</h1>

    
    <h2>{{ $username }}</h2>

    <p><strong>Role:</strong> Customer</p>
    <p><strong>Status:</strong> Aktif</p>
    <p style="
    font-size:14px;
    color:#555;
    margin-top:10px;
    line-height:1.5;
">
    Saya adalah pengguna GrapeIn yang menyukai buah segar berkualitas tinggi. 
    Saya menggunakan aplikasi ini untuk memantau stok dan membeli produk anggur terbaik.
    </p>


</div>
<div style="text-align:center; margin-top:20px;">
    <a href="/dashboard" class="btn-back">Kembali</a>
</div>
@endsection
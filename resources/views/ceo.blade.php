@extends('layouts.app')

@section('content')

<div class="card profile-card">
    <img src="{{ asset('images/ceo.jpeg') }}" alt="Foto CEO" style="
        width:200px;
        border-radius:15px;
        margin-top:15px;
    ">

    <h2>Novi Dian Safitri</h2>
    <p><strong>Jabatan:</strong> CEO GrapeIn</p>

    <p>
        Novi Dian Safitri merupakan pendiri sekaligus CEO dari perusahaan GrapeIn 
        yang didirikan sejak tahun 2005. Dengan dedikasi dan visi yang kuat dalam 
        mengembangkan bisnis buah anggur berkualitas, beliau berhasil membawa 
        GrapeIn berkembang pesat hingga memiliki lebih dari 50 cabang yang tersebar 
        di seluruh Indonesia. Kepemimpinannya yang inovatif dan konsisten menjadikan 
        GrapeIn sebagai salah satu perusahaan distribusi buah anggur terpercaya di Indonesia.
    </p>

</div>
<div style="text-align:center; margin-top:20px;">
    <a href="/dashboard" class="btn-back">Kembali</a>
</div>

@endsection
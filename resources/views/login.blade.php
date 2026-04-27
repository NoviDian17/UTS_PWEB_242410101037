@extends('layouts.app')

@section('content')

<div class="card" style="max-width:400px; margin:auto; margin-top:50px;">
    <h2 style="text-align:center;">Login</h2>

    <form method="POST" action="/login">
        @csrf

        <input type="text" name="username" placeholder="Masukkan Username" 
               style="width:100%; padding:10px; margin-top:10px;">

        <br><br>

        <button type="submit" style="width:100%;">Login</button>
    </form>


</div>

@endsection
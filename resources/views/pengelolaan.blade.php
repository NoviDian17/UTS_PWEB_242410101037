@extends('layouts.app')

@section('content')
<div class="table-wrapper">
    <table class="table-anggur">
        <thead>
            <tr>
                <th>No</th>
                <th>Produk</th>
                <th>Nama Produk</th>
                <th>Stok</th>
                <th>Harga</th>
                <th>Status</th>
                <th>Unit</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($anggur as $index => $item)
            <tr>
                <td>{{ $index + 1 }}</td>

                <td>
                    <img src="{{ asset('images/' . $item['produk']) }}" width="50">
                </td>

                <td>{{ $item['nama'] }}</td>
                <td>{{ $item['stok'] }}</td>
                <td>Rp {{ number_format($item['harga'],0,',','.') }}</td>
                <td>{{ $item['status'] }}</td>
                <td>{{ $item['unit'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div style="text-align:center; margin-top:20px;">
    <a href="/dashboard" class="btn-back">Kembali</a>
</div>


@endsection
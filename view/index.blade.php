@extends('adminlte::page')

@section('title', 'Data Buku')

@section('content_header')
    <h1>Data Buku</h1>
@stop

@section('content')
@php
    $ar_judul = ['No', 'ISBN', 'Judul', 'Stok', 'Pengarang', 'Penerbit', 'Kategori'];
    $no = 1;
@endphp

<div class="card">
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    @foreach($ar_judul as $jdl)
                        <th>{{ $jdl }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach($ar_buku as $buku)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $buku->isbn }}</td>
                    <td>{{ $buku->judul }}</td>
                    <td>{{ $buku->stok }}</td>
                    <td>{{ $buku->nama }}</td>
                    <td>{{ $buku->pen }}</td>
                    <td>{{ $buku->kat }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop

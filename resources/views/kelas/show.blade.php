@extends('layout.master')

@section('h1')
Kelas
@section('content')
    <div>
        <h1>SPP</h1>
        <h3> Id : {{$kela->id}}</h3>
        <h3> Nama kelas : {{$kela->nama_kelas}}</h3>
        <h3> Kompetensi Keahlian: {{$kela->kompetensi_keahlian}}</h3>
    </div>

@endsection

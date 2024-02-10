@extends('layout.master')

@section('h1')

@section('content')
<div>
        <h1>spp</h1>
    <h3>Id: {{$spp->id_spp}}</h3>
    <h3>Tahun: {{$spp->tahun}}</h3>
    <h3>Nominal: {{$spp->nominal}}</h3>
</div>
@endsection
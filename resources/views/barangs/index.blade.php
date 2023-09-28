@extends('barangs.layout')

@section('tittle', 'Daftar Barang')

@section('header-text')
<h1>Daftar Barang</h1>
<p>Inilah daftar dari barang-barang yang terdapat di gudang :</p>
@endsection

@section('content')
    @include('barangs.content')
@endsection

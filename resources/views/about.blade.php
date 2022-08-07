@extends('layouts.main')

@section('container')
  <center><h1>Halaman About</h1></center>
  <center><h3>{{ $nama }}</h3><center>
  <center><h4>{{ $kelas }}</h4><center>
  <center><h5><?= $alamat;?></h5><center>
  <center><img src="img/{{ $gambar }}" alt="{{ $nama }}" width="200"><center>

    @endsection

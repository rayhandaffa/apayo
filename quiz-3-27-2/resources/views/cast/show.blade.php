@extends('layout.master')

@section('tittle')
    Detail Berita ID ke {{$berita->id}}
@endsection

@section('content')
<h1>Judul : {{$berita->nama}}</h1>
<h1>Content : {{$berita->umur}}</h1>
<h1>Umur : {{$berita->bio}}</h1>
@endsection

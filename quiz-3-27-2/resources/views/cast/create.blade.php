@extends('layout.master')

@section('tittle')
    Tambah Berita
@endsection

@section('content')
    <form action="/berita" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama">Judul</label>
                <input type="text" class="form-control" name="judul" id="Judul" placeholder="Masukkan Judul">
                @error('judul')
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                       {{ $message }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="umur">Content</label>
                <input type="text" class="form-control" name="content" id="content" placeholder="content">
                @error('content')
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                       {{ $message }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="bio">Umur</label>
                <input type="text" class="form-control" name="umur" id="umur" placeholder="Masukkan Bio">
                @error('bio')
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                       {{ $message }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
@endsection

@extends('layout.master')

@section('tittle')
    Detail Cast ID ke {{$berita->id}}
@endsection

@section('content')
<form action="/berita/{{$berita->id}}" method="POST">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" name="judul" value="{{$berita->nama}}" id="judul" placeholder="Masukkan Judul">
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
                <label for="content">content</label>
                <input type="text" class="form-control" name="content" value="{{$berita->content}}" id="content" placeholder="Masukkan Content">
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
                <label for="umur">umur</label>
                <input type="text" class="form-control" name="umur" value="{{$berita->umur}}" id="umur" placeholder="Masukkan umur">
                @error('umur')
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                       {{ $message }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
@endsection

@extends('layout.master')

@section('tittle')
    List Berita
@endsection

@section('content')
<a href="/berita/create" class="btn btn-primary">Tambah</a>
        <table class="table">
            <thead class="thead-light">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Judul</th>
                <th scope="col">Content</th>
                <th scope="col">Umur</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($listberita as $key=>$value)
                    <tr>
                        <td>{{$key + 1}}</th>
                        <td>{{$value->judul}}</td>
                        <td>{{$value->content}}</td>
                        <td>{{$value->umur}}</td>
                        <td>
                            <a href="/breita/{{$value->id}}" class="btn btn-info">Show</a>
                            <a href="/berita/{{$value->id}}/edit" class="btn btn-primary">Edit</a>
                            <form action="/berita/{{$value->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-danger my-1" value="Delete">
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr colspan="3">
                        <td>No data</td>
                    </tr>  
                @endforelse              
            </tbody>
        </table>

@endsection

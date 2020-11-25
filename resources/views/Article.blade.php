@extends('layouts.main')

@section('title', 'ARTICLE')

@section('container')
    <div class="container">
        <div class="row"> 
            <div class="col-10">
                <h3 align="center">
                <body style="background-color:bisque">
                    <font color="red" font-size=45px style="background-color:white">
                    Halaman Article</font></h3>
                    <a href="/article/add" class="btn btn-primary my-3">Tambah Data</a>
                    <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">NO</th>
                            <th scope="col">JUDUL</th>
                            <th scope="col">CONTENT</th>
                            <th scope="col">GAMBAR</th>
                            <th scope="col">Kelola</th>                          
                        </tr>  
                    </thead>
                    @foreach( $article as $a)
                        <tr> 
                            <td>{{ $a->id }}</td>                         
                            <td>{{ $a->title }}</td>
                            <td>{{ $a->content}}</td>
                            <td>{{ $a->imageurl}}</td>
                            <td>
                            <a href="article/editArticle/ {{$a->id}}" class="badge badge-warning">Edit</a>
                                </form>
                                <form action="{{$a->id}}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <a href="article/delete/{{$a->id}}" class="badge badge-danger">Hapus</a>
                                </form>
                            <td>
                        </tr>
                        @endforeach
                        </table>
                </body>
            </div>
        </div>
    </div> 
                


@endsection
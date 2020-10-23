@extends('layouts.main')

@section('title', 'Database Guru 2020')

@section('container')
    <div class="container">
        <div class="row"> 
            <div class="col-10">
                <h3 align="center">
                <body style="background-color:bisque">
                    <font color="red" font-size=45px style="background-color:white">
                    DATABASE GURU 2020 SDN 5 OLEAN</font></h3>
                   <a href="/manage/addArticle" class="btn btn-primary my-3">Tambah Data</a>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">NIP</th>
                            <th scope="col">Nama Lengkap</th>
                            <th scope="col">Tempat, Tanggal Lahir</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Kelola</th>
                            
                        </tr>  
                    </thead>
                    @foreach( $staff as $a)
                        <tr> 
                            <td>{{ $a->id }}</td>                         
                            <td>{{ $a->NIP }}</td>
                            <td>{{ $a->nama}}</td>
                            <td>{{ $a->TTL}}</td>
                            <td>{{ $a->Alamat }}</td> 
                            <td>
                                    <a href="manage/editArticle/{{$a->id}}" class="badge badge-warning">Edit</a>
                                </form>
                                <form action="{{$a->id}}" method="post" class="d-inline">
                                    @method('deleteArticle')
                                    @csrf
                                    <a href="manage/deleteArticle/{{$a->id}}" class="badge badge-danger">Hapus</a>
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
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
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            
                            <th scope="col">NIP</th>
                            <th scope="col">Nama Lengkap</th>
                            <th scope="col">Tempat, Tanggal Lahir</th>
                            <th scope="col">Alamat</th>
                        </tr>  
                    </thead>
                    @foreach( $guru as $gr)
                        <tr>                          
                            <td>{{ $gr->NIP }}</td>
                            <td>{{ $gr->Nama}}</td>
                            <td>{{ $gr->TTL}}</td>
                            <td>{{ $gr->Alamat }}</td>                          
                        </tr>
                        @endforeach
                </table>
                </body>
            </div>
        </div>
    </div> 



@endsection
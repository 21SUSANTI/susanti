@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        
                    @endif
                    <a class="nav-link active" href="/">Home</a>
                    <a class="nav-link" href="/profil3">Profil</a>
                    <a class="nav-link" href="/ekstrakulikuler3">EkstraKulikuler</a>
                    <a class="nav-link" href="/guru3">Guru</a>
                    <a class="nav-link" href="/Siswa3">Siswa</a>
                    <a class="nav-link" href="/article">Article</a>
                </div>
            </div>
        </div>
    </div>
</div>
                    <div class="container">
                    <h2>Daftar Artikel</h2>
                    @foreach($artikel as $a)
                    <div class="panel panel-default" col=>
                        <div class="panel-heading">
                            <h3>{{ $a->title}}<h3>
                        </div>
                        <form class="form-inline" action="/search">
                        @csrf      
                        <label for="keyword">Kata kunci : </label>
                        <input type="text" class="form-control" name="keyword">
                        <button type="submit" class="btn btn-primary">Search</button>
                        </form> 
                        <div class="panel-body"> 
                            <img src="{{ $a->urlToImage}}">
                            <p>{{ $a->description}}<p>
                            <p>{{ $a->url}}<p>
                        </div>
                    </div>
                    @endforeach
                    </div> 
@endsection

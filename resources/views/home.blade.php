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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

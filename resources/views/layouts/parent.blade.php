<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<body>
    <div id="app">
                @section('data')
                ini merupakan master data
                @show
            <main class="py-4">
                @yield('content')
            </main>
            <main class="py-4">
                <p align=center> Hai.. Nama saya Susanti. Saya di kelas 2E Prodi DIII Manajemen Informatika
                Jurusan Teknologi Informasi. Disini saya sedang belajar mata kuliah pemprograman web lanjut.
                Semangat ! </p>
            </main>
            <main class="py-4">
                <br><br><br>
                <p align=center>ABOUT : </p>
                @extends('about') 
            </main>
            <li class="nav-item {{ Route::is('manage') ? 'active' : '' }}"> 
            @can('manage-articles')
            <a class="nav-link" href="{{ route('manage') }}">Kelola</a> 
            @endcan
            </li>
            <li class="nav-item {{ Route::is('home') ? 'active' : '' }}"> 
            @can('user-display')
            <a class="nav-link" href="{{ route('home') }}">Home</a> 
            @endcan
            </li>
            <li class="nav-item {{ Route::is('about') ? 'active' : '' }}"> 
            @can('user-display')
            <a class="nav-link" href="{{ route('about') }}">About</a> 
            @endcan
            </li>

    </div>
</body>
</html>

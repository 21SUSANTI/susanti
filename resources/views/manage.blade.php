<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Tambah Data</title>
  </head>
  <body>
  <h1><font color="red" style="background-color:lightblue"><marquee>SELAMAT DATANG DI SDN 5 OLEAN</marquee></font color></h1><br>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</nav>
@section('container')
<div class="col-lg-8">
<br><br>
<div class="card">
<div class="card-header">
<h2> Add teacher </h2><br>
<form action="/manage" method="post">
<a href="/article/cetak_pdf" class="btn btn-primary" target="_blank">CETAK PDF</a>

   @csrf
   
    <div class="form-group">
        <label for="id">No</label>
        <input type="text" class="form-control" required="required" name="no"></br>
    </div>
    <div class="form-group">
        <label for="nip">NIP</label>
        <input type="text" class="form-control" required="required" name="nip"></br>
    </div>
    <div   class="form-group">
        <label for="nama">Nama Lengkap</label>
        <input type="text" class="form-control" required="required" name="nama"></br>
    </div>
    <div class="form-group">
        <label for="ttl">Tempat, Tanggal lahir</label>
        <input type="text" class="form-control" required="required" name="ttl"></br>
    </div>
    <div class="form-group">
        <label for="alamat">Alamat</label>
        <input type="text" class="form-control" required="required" name="alamat"></br>
    </div>
    <div class="form-group">
    <label for="image">Feature Image</label>
    <input type="file" class="form-control" required="required" name="image"></br>
    </div>
    <form action="/article/create" method="post" enctype="multipart/form-data">
    <button type="submit" name="add" class="btn btn-primary">Tambah Data</button>
</form></div></div>
</div>
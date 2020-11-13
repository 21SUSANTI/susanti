<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Edit</title>
  </head>
  <body>
  <h1><font color="red" style="background-color:lightblue"><marquee>SELAMAT DATANG DI SDN 5 OLEAN</marquee></font color></h1><br>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</nav>

<div class="col-lg-8">
<br><br>
<div class="card">
<div class="card-header">
<h2> Edit Data Guru </h2><br>
<form action="/guru3/updateArticle/{{$staff->id}}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <input type="hidden" name="id" value="{{$staff->id}}"><br>
                <div class="form-group">
                <label for="id">No</label>
                <input type="text" class="form-control"
                    required="required" name="id" value="{{$staff->id}}"><br>
                </div>
                <div class="form-group">
                <label for="NIP">NIP</label>
                <input type="text" class="form-control"
                    required="required" name="NIP" value="{{$staff->NIP}}"><br>
                </div>
                <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input type="text" class="form-control"
                    required="required" name="nama" value="{{$staff->nama}}"><br>
                </div>
                <div class="form-group">
                <label for="TTL">Tempat, Tanggal lahir</label>
                <input type="text" class="form-control"
                    required="required" name="TTL" value="{{$staff->TTL}}"><br>
                </div>
                <div class="form-group">
                <label for="Alamat">Alamat</label>
                <input type="text" class="form-control"
                    required="required" name="Alamat" value="{{$staff->Alamat}}"><br>
                </div>
                <div class="form-group">
                <label for="image">Feature Image</label>
                <input type="file" class="form-control" required="required" name="image" value="{{$article->featured_image}}"></br>
                <img width="150px" src="{{asset('storage/'.$article>featured_image)}}">
                </div>
                
                <button type="submit" name="edit" class="btn btnprimary float-right">Ubah Data</button>
                </form>
        </div>
      </div>
    </div>
  </section>
  <!-- END : Main -->

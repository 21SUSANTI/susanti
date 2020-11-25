<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Edit Article</title>
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
<h2> Edit Article </h2><br>
<form action="/article/update/{{$article->id}}" method="POST">
                {{csrf_field()}}
                <input type="hidden" name="id" value="{{$article->id}}"><br>
                <div class="form-group">
                <label for="id">NO</label>
                <input type="text" class="form-control"
                    required="required" name="id" value="{{$article->id}}"><br>
                </div>
                <div class="form-group">
                <label for="title">JUDUL</label>
                <input type="text" class="form-control"
                    required="required" name="NIP" value="{{$article->title}}"><br>
                </div>
                <div class="form-group">
                <label for="content">CONTENT</label>
                <input type="text" class="form-control"
                    required="required" name="nama" value="{{$article->content}}"><br>
                </div>
                <div class="form-group">
                <label for="imageurl">GAMBAR</label>
                <input type="text" class="form-control"
                    required="required" name="TTL" value="{{$article->imageurl}}"><br>
                </div>
                <button type="submit" name="edit" class="btn btnprimary float-right">Ubah Data</button>
                </form>
        </div>
      </div>
    </div>
  </section>
  <!-- END : Main -->
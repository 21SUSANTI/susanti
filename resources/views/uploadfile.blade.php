@extends('layouts.main')

@section('title', 'Upload File')

@section('container')
    <div class="container">
        <div class="row"> 
            <div class="col-10">
                <h3 align="center">
                <body style="background-color:khaki">
                    <font color="red" font-size=45px style="background-color:white">
                    DAFTAR NAMA SISWA BARU TAHUN AJARN 2020 SDN 5 OLEAN</font></h3>

<form method="post" action="/uploadfile" enctype="multipart/form-data">
    {{csrf_field()}}
    Nama : <input type="text" name="nama" value="" /><br>
    Pilih File : <input type="file" name="filename" value="" /> <br>

    <hr>
    <input type="submit" name="submit" value="simpan" />
<form>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Membuat Laporan PDF Dengan DOMPDF Laravel</title> 
</head>
<body>
 
    <style type="text/css"> 
        table tr td, 
        table tr th{ 
            font-size: 9pt; 
        } 
</style> 
<center> 
    <h5>Laporan Artikel</h4> 
</center> 

<table class='table table-bordered'> 
    <thead> 
        <tr> 
            <th scope="col">No</th>
            <th scope="col">NIP</th>
            <th scope="col">Nama Lengkap</th>
            <th scope="col">Tempat, Tanggal Lahir</th>
            <th scope="col">Alamat</th>
            <th scope="col">Gambar</th>
        </tr> 
    </thead> 
 
<tbody> 
    @php $i=1 @endphp

    @foreach($article as $a) 

    <tr> 
        <td>{{ $i++ }}</td> 
        <td>{{$a->title}}</td> 
        <td>{{$a->content}}</td>
        <td>{{$a->featured_image}}</td> 
    </tr> 

    @endforeach 
 
</tbody>  
</table> 
</body>
</html> 
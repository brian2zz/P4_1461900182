@extends('layout0182')
@section('badan')


<a href="/export"><button style="margin-right :30px;margin-left :290px;margin-bottom :50px;" class="btn btn-primary" type="submit">Convert</button></a>
<br>
    <table>
        
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Jenis Buku</th>
                <th scope="col">Judul Buku</th>
                <th scope="col">Tahun Terbit</th>    
            </tr>
        </thead>
        <tbody>
            @foreach($buku as $book)
            <tr>
                <td style= "text-align:center;">{{$book->id_rak}}</td>
                <td>{{$book->jenis}}</td>
                <td>{{$book->judul}}</td>
                <td>{{$book->tahun_terbit}}</td>
            </tr>
           @endforeach
        </tbody>
    </table>
@endsection
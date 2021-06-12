<table>
        
    <thead>
        <tr>
            <th >ID</th>
            <th >Jenis Buku</th>
            <th >Judul Buku</th>
            <th >Tahun Terbit</th>    
        </tr>
    </thead>
    <tbody>
        @foreach($buku as $book)
        <tr>
            <td>{{$book->id_rak}}</td>
            <td>{{$book->jenis}}</td>
            <td>{{$book->judul}}</td>
            <td>{{$book->tahun_terbit}}</td>
        </tr>
       @endforeach
    </tbody>
</table>
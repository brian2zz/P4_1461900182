@extends('layout0182')
@section('badan')

<br>
    <table>
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Username</th>
                <th scope="col">Nama</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach($user as $User)
            <tr>
                <td style= "text-align:center;">{{$User->id}}</td>
                <td>{{$User->username}}</td>
                <td>{{$User->nama}}</td>
                
            </tr>
           @endforeach
        </tbody>
    </table>
@endsection
@extends('layouts/app')
@section('title', 'Admin - Detail Book')
@section('content')
<div class="content-wrapper">
    <h3>Buku {{$book->judul}}</h3>
    <h5>{{$book->penulis}}</h5>
    <h5>{{$book->tahun}}</h5>
    <h5>{{$book->penerbit}}</h5>
</div>
@endsection
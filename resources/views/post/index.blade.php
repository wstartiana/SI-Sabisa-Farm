@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Tabel Stok jumlah barang </h2>
            </div>
        </div>
    </div>

    <br>
    <br>
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>nama barang</th>
            <th>jumlah stok</th>
            <th width="280px">Action</th>
        </tr>

    @foreach ($posts as $post)
    <tr>
        <td>{{ $post->id}}</td>
        <td>{{ $post->nama}}</td>
        <td>{{ $post->jumlah}}</td>
        <td>
            <a class="btn btn-info" href="{{ URL('/post/'.$post->id.'/edit')}}">Edit</a>
            <a class="btn btn-primary" href="{{ URL('/post/'.$post->id.'/delete')}}">Delete</a>
            {{$post->id++}}
        </td>
    </tr>
    @endforeach
    </table>

@endsection

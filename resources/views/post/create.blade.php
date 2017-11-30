@extends('layouts.app')

@section('content')
  <div class="container">
    <form class="" action="{{ route('post.store') }}" method="post">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="">Nama barang</label>
        <input type="text" class="form-control" name="nama" placeholder="nama barang">
      </div>

      <div class="form-group">
        <label for="">jumlah stok</label>
      <input type="text" class="form-control" name="jumlah" placeholder="jumlah stok">
      </div>

      <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Save">
      </div>

    </form>
  </div>
@endsection

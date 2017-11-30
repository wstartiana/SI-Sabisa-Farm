@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">Edit Stok</div>

          <div class="panel-body">
          <form class="" action="{{ route('post.update', $post) }}" method="post">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}

            <div class="form-group">
              <label for="">Nama barang</label>
              <input type="text" class="form-control" name="nama" placeholder="nama barang" value="{{ $post->nama }}">
            </div>

            <div class="form-group">
              <label for="">jumlah stok</label>
            <input type="text" class="form-control" name="jumlah" placeholder="jumlah stok" value="{{ $post->jumlah }}">
            </div>

            <div class="form-group">
              <input type="submit" class="btn btn-primary" value="Save">
            </div>
        </form>
        </div>

      </div>
    </div>
  </div>
</div>
@endsection

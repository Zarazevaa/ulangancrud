@extends('template')
@section('content')
  <section class="main-section">
    <div class="content">
      <h1>Tambah barang</h1>
      <hr>
      @if($errors->any())
        <div class="alert alert-danger">
          @foreach($errors->all() as $error)
            <li><strong>{{ $error }}</strong>
          @endforeach
        </div>
      @endif

      <form action="{{ route('barang.store') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="id">ID:</label>
          <input type="text" class="form-control" name="id" id="id">
        </div>
        <div class="form-group">
          <label for="kd_barang">kd_barang:</label>
          <input type="text" class="form-control" name="kd_barang" id="kd_barang">
        </div>
        <div class="form-group">
          <label for="nama_barang">Nama Barang:</label>
          <input type="text" class="form-control" name="nama_barang" id="nama_barang">
        </div>
        <div class="form-group">
          <label for="stok">Stok:</label>
          <input type="text" class="form-control" name="stok" id="stok">
        </div>
        <div class="form-group">
          <label for="harga">harga:</label>
          <input type="text" class="form-control" name="harga" id="harga">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-md btn-primary">Submit</button>
          <button type="reset" class="btn btn-md btn-danger">Cancel</button>
        </div>
      </form>
    </div>
  </section>
@endsection

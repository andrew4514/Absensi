@extends('master')

@section('content')

<h1 class="text-center" style="margin-top: 10%">Upload Kategori <span class="text-success">Artikel</span></h1>

<div class="container">
    <div class="row" style="margin-top: 6%">
    <div class="col-3"></div>
    <form class="col-6" method="POST" action="{{ route('kategori.store') }}">
        @csrf
        <div class="mb-3">
            <label for="exampleInputKategori" class="form-label">Nama Kategori</label>
            <input type="text" class="form-control @error('kategori') is-invalid @enderror" name="nama" id="exampleInputKategori">
            @error('nama')
            <div>{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</div>
</div>
@endsection
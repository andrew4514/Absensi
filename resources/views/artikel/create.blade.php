@extends('master')

@section('content')

<h1 class="text-center" style="margin-top: 5%">Upload <span class="text-success">Artikel</span></h1>

<div class="container">
    <div class="row" style="margin-top: 4%">
    <div class="col-3"></div>
    <form class="col-6" method="POST" action="{{ route('kelasSMP.store') }}">
        @csrf
        <div class="mb-3">
            <label for="exampleInputJudul" class="form-label">Judul</label>
            <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" id="exampleInputJudul">
            @error('judul')
            <div>{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleInputDeskripsi" class="form-label">Deskripsi</label>
            <textarea type="text" class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" id="exampleInputDeskripsi" rows="5"></textarea>
            @error('deskripsi')
            <div>{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleInputPenulis" class="form-label">Penulis</label>
            <input type="text" class="form-control @error('penulis') is-invalid @enderror" name="penulis" id="exampleInputPenulis">
            @error('penulis')
            <div>{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleInputGambar" class="form-label">Gambar</label>
            <input type="file" class="form-control @error('gambar') is-invalid @enderror" name="gambar" id="exampleInputGambar" style="border: none">
            @error('gambar')
            <div>{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary mt-2">Submit</button>
    </form>
</div>
</div>
</div>
@endsection
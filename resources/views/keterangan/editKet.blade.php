@extends('master')

@section('content')

<h1 class="text-center" style="margin-top: 10%"><span class="text-warning">Update</span> Keterangan Hadir</h1>

<div class="container">
    <div class="row" style="margin-top: 6%">
    <div class="col-3"></div>
    <form class="col-6" method="POST" action="{{ route('keterangan.update', [$ket->id]) }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="exampleInputKeterangan" class="form-label ">Keterangan</label>
            <input type="text" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" id="exampleInputKeterangan" value="{{ $ket->keterangan }}">
            @error('keterangan')
            <div>{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</div>
</div>
@endsection
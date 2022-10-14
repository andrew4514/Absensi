@extends('master')

@section('content')

<h1 class="text-center" style="margin-top: 10%">Update Nama Kelas <span class="text-warning">(SMK)</span></h1>

<div class="container">
    <div class="row" style="margin-top: 6%">
    <div class="col-3"></div>
    <form class="col-6" method="POST" action="{{ route('kelasSMK.update', [$kel->id]) }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="exampleInputKelas" class="form-label ">Nama Kelas</label>
            <input type="text" class="form-control @error('kelas') is-invalid @enderror" name="kelas" id="exampleInputKelas" value="{{ $kel->kelas }}">
            @error('kelas')
            <div>{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</div>
</div>
@endsection
@extends('master')

@section('content')

<h1 class="text-center" style="margin-top: 10%"><span class="text-success">Input</span> Nama Kelas</h1>

<div class="container">
    <div class="row" style="margin-top: 6%">
    <div class="col-3"></div>
    <form class="col-6" method="POST" action="{{ route('kelasSD.store') }}">
        @csrf
        <div class="mb-3">
            <label for="exampleInputKelas" class="form-label">Nama Kelas</label>
            <input type="text" class="form-control @error('kelas') is-invalid @enderror" name="kelas" id="exampleInputKelas">
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
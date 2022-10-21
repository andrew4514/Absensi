@extends('master')

@section('content')

<h1 class="text-center" style="margin-top: 10%">Input Nama Kelas <span class="text-success">(SMA)</span></h1>

<div class="container">
    <div class="row" style="margin-top: 6%">
    <div class="col-3"></div>
    <form class="col-6" method="POST" action="{{ route('kelasSMA.store') }}">
        @csrf
        <div class="mb-3">
            <label for="exampleInputKelasSMA" class="form-label">Nama Kelas</label>
            <input type="text" class="form-control @error('kelas') is-invalid @enderror" name="kelas" id="exampleInputKelasSMA">
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
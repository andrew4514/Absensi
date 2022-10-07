@extends('master')

@section('content')

<h1 class="text-center" style="margin-top: 10%">Form Keterangan Hadir</h1>

<div class="container">
    <div class="row" style="margin-top: 10%">
    <div class="col-3"></div>
    <form class="col-6" method="POST" action="{{ route('keterangan.store') }}">
        @csrf
        <div class="mb-3">
            <label for="exampleInputKeterangan" class="form-label">Keterangan</label>
            <input type="text" class="form-control" name="keterangan" id="exampleInputKeterangan">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</div>
</div>
@endsection
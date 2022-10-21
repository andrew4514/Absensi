@extends('master')

@section('content')
    
<div class="container">
    <div class="card" style="margin-top: 6%">
        <div class="text-center">
            <img src="{{ asset('image') }}/{{ 'class.png' }}" width="400px" alt="">
        </div>
        <center>
        <p>Pilih Nama Kelas yang ingin ditambahkan</p>
            <a href="{{ route('kelasSD.create') }}">SD</a><br>
            <a href="{{ route('kelasSMP.create') }}">SMP</a><br>
            <a href="{{ route('kelasSMA.create') }}">SMA</a><br>
            <a href="{{ route('kelasSMK.create') }}">SMK</a>
        </center>
        <div class="mt-3"></div>
    </div>
</div>
</div>
    
@endsection
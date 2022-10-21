@extends('master')

@section('content')
    
<div class="container">
    <div class="card" style="margin-top: 6%">
        <div class="text-center">
            <img src="{{ asset('image') }}/{{ 'class.png' }}" width="400px" alt="">
        </div>
        <center>
        <p>Pilih Table Kelas</p>
            <a href="{{ route('kelasSD.index') }}">SD</a><br>
            <a href="{{ route('kelasSMP.index') }}">SMP</a><br>
            <a href="{{ route('kelasSMA.index') }}">SMA</a><br>
            <a href="{{ route('kelasSMK.index') }}">SMK</a>
        </center>
        <div class="mt-3"></div>
    </div>
</div>
</div>
    
@endsection
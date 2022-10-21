@extends('master')

@section('content')

<h1 class="text-center text-success mt-5">Form Absensi Siswa</h1>

<div class="container">
    <div class="row" style="margin-top: 6%">
    <div class="col-3"></div>
    <form class="col-6" method="POST" action="{{ route('keterangan.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="card p-4 shadow border-left-success">
            <div class="mb-3">
                <label for="nama" class="form-label ">Nama</label>
                <input type="text"class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama">
                @error('nama')
                <div>{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="card p-4 shadow mt-5 border-left-success">
            <div class="mb-3">
                <label class="form-label">Kelas</label><br>

                <button type="button" class="btn btn-primary" onclick="sd()">SD</button>
                <button type="button" class="btn btn-primary" onclick="smp()">SMP</button>
                <button type="button" class="btn btn-primary" onclick="sma()">SMA</button>
                <button type="button" class="btn btn-primary" onclick="smk()">SMK</button>

                <p class="mt-3" id="sd"></p>

                <script>
function sd(){
    document.getElementById('sd').innerHTML = "<select name='kelas' class='form-control col-12'><option disabled selected>SD</option>@foreach(App\Models\Kelas::all() as $sd)<option value='{{ $sd->kelas }}'>{{ $sd->kelas }}</option>@endforeach</select>";
}

function smp(){
    document.getElementById('sd').innerHTML = "<select name='kelas' class='form-control col-12'><option disabled selected>SMP</option>@foreach(App\Models\KelasSMP::all() as $smp)<option value='{{ $smp->kelas }}'>{{ $smp->kelas }}</option>@endforeach</select>";
}

function smk(){
    document.getElementById('sd').innerHTML = "<select name='kelas' class='form-control col-12'><option disabled selected>SMK</option>@foreach(App\Models\KelasSMK::all() as $smk)<option value='{{ $smk->kelas }}'>{{ $smk->kelas }}</option>@endforeach</select>";
}

function sma(){
    document.getElementById('sd').innerHTML = "<select name='kelas' class='form-control col-12'><option disabled selected>SMA</option>@foreach(App\Models\KelasSMA::all() as $sma)<option value='{{ $sma->kelas }}'>{{ $sma->kelas }}</option>@endforeach</select>";
}
                </script>

                @error('kelas')
                <div>{{ $message }}</div>
                @enderror
            </div>
        </div>



        <div class="card p-4 shadow border-left-success mt-5">
            <div class="mb-3">
                <label for="keterangan" class="form-label ">Keterangan</label>

                
                <select name="keterangan" class="form-control @error('keterangan') is-invalid @enderror" id="keterangan">
                    <option disabled selected value="">Pilih Keterangan</option>

                    @foreach (App\Models\Keterangan::all() as $ket)
                        <option value="{{ $ket->keterangan }}">{{ $ket->keterangan }}</option>
                    @endforeach

                </select>

                @error('keterangan')
                <div>{{ $message }}</div>
                @enderror
            </div>
        </div>

         <div class="card p-4 shadow border-left-success mt-5">
            <div class="mb-3">
                <label for="foto" class="form-label">Nama</label><br>
                <input type="file" class="form-image @error('foto') is-invalid @enderror" name="foto" id="foto">
                @error('foto')
                <div>{{ $message }}</div>
                @enderror
            </div>
        </div>

        <button type="submit" class="btn btn-primary mt-4">Submit</button>
    </form>
</div>
</div>
</div>
@endsection
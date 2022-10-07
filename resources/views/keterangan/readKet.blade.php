@extends('master')

@section('content')
    
<h1 class="text-center text-dark mt-4">Table Keterangan Hadir</h1>

  @if(Session::has('message'))
            <div class="alert alert-success mt-5">
                {{ Session::get('message') }}
            </div>
  @endif

  @if(Session::has('delete'))
            <div class="alert alert-danger mt-5">
                {{ Session::get('delete') }}
            </div>
  @endif

<div class="container mt-5">
        <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Keterangan</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            @php
              $i = 1;
            @endphp
            @foreach ($ket as $k)
                <tr>
                <th scope="row">{{ $i }}</th>
                <td>{{ $k->keterangan }}</td>
                <td><a href=""></a><button class="btn btn-primary">Edit</button></td>
                  <form action="{{route('keterangan.destroy',[$k->id])}}" method="post">
                    @csrf
                    {{method_field('DELETE')}}
                    <td><a href=""><button class="btn btn-danger">Delete</button></a></td>
                  </form>
                </tr>
                 @php
                     $i++;
                 @endphp
             @endforeach
        </tbody>
        </table>
    </div>
</div>
    
@endsection
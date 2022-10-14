@extends('master')

@section('content')
    
<h1 class="text-center text-dark mt-4">Table Kelas <span class="text-primary">(SMK)</span></h1>

  @if(Session::has('message-create-kelas-smk'))
    <div class="container">
              <div class="alert alert-success mt-5">
                  {{ Session::get('message-create-kelas-smk') }}
              </div>
    </div>
  @endif

  @if(Session::has('message-delete-kelas-smk'))
    <div class="container">
              <div class="alert alert-danger mt-5">
                  {{ Session::get('message-delete-kelas-smk') }}
              </div>
    </div>
  @endif

  @if(Session::has('message-update-kelas-smk'))
    <div class="container">
              <div class="alert alert-warning mt-5">
                  {{ Session::get('message-update-kelas-smk') }}
              </div>
    </div>
  @endif

<div class="container mt-5">
        <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Kelas</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            @php
              $i = 1;
            @endphp
            @foreach ($kel as $k)
                <tr>
                <th scope="row">{{ $i }}</th>
                <td>{{ $k->kelas }}</td>
                <td><a href="{{ route('kelasSMK.edit', [$k->id]) }}"><button class="btn btn-primary">Edit</button></a></td>
                  <form action="{{route('kelasSMK.destroy',[$k->id])}}" method="post">
                    @csrf
                    {{method_field('DELETE')}}
                    <td><button class="btn btn-danger">Delete</button></td>
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
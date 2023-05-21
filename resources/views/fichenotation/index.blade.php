@extends('fichenotation.layout')
@section('content')
<h1>index</h1>
<div class="container">
    @if($message = Session:: get('success'))
    <div class="alert alert-success" role="alert">
        {{$message}}
    </div>
    @endif
</div>
<table class="table">
    <thead class="thead-light">
    <tr>
        <th scope="col">id</th>
        <th scope="col">nom  de faculty</th>

    </tr>
    </thead>
    <tbody>
        @foreach ($fichenotation as $item)
        <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->discipline}}</td>
            <td>{{$item->demande_id}}</td>
            <td>{{$item->aptitude}}</td>
            <td>{{$item->initiative}}</td>
            <td>{{$item->imagination}}</td>
            <td>{{$item->conaissance}}</td>
            <td>{{$item->note}}</td>
            <td>{{$item->appreciation}}</td>
            <td>{{$item->envoi}}</td>

            <div class="container">
                <div class="row">
                  <div class="col-sm">
                    <td><a href="{{route('fichenotation.edit', $item ->id)}}"  class="btn btn-success">edit</a></td>
                </div>
                  <div class="col-sm">
                    <td><a href="{{route('fichenotation.show', $item ->id)}}" class="btn btn-primary">show</a></td>
                </div>
                <div class="col-sm">
                    <td><a href="', $item ->id) }}">Edit</a>
                    </td>
                </div>
                  <div class="col-sm">
                    <td>
                        <form action="{{route('fichenotation.destroy', $item ->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"> delete</button>
                        </form>
                        </td>                  </div>
                </div>
              </div>

        </tr>

        @endforeach

    </tbody>
</table>
@endsection

@extends('seance.layout')
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
        <th scope="col">demande_id</th>
        <th scope="col">delai</th>
        <th scope="col">date</th>
        <th scope="col">hentre</th>
        <th scope="col">hsorti</th>
        <th scope="col">observation</th>


    </tr>
    </thead>
    <tbody>
        @foreach ($seance as $item)
        <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->demande_id}}</td>
            <td>{{$item->delai}}</td>
            <td>{{$item->date}}</td>
            <td>{{$item->hentre}}</td>
            <td>{{$item->hsorti}}</td>
            <td>{{$item->observation}}</td>


            <div class="container">
                <div class="row">
                  <div class="col-sm">
                    <td><a href="{{route('seance.edit', $item ->id)}}"  class="btn btn-success">edit</a></td>
                </div>
                  <div class="col-sm">
                    <td><a href="{{route('seance.show', $item ->id)}}" class="btn btn-primary">show</a></td>
                </div>
                <div class="col-sm">
                    <td><a href="', $item ->id) }}">Edit</a>
                    </td>
                </div>
                  <div class="col-sm">
                    <td>
                        <form action="{{route('seance.destroy', $item ->id)}}" method="POST">
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

@extends('university.layout')
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
        <th scope="col">nom de l'université</th>

    </tr>
    </thead>
    <tbody>
        @foreach ($university as $item)
        <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->name}}</td>
            <td>{{$item->wilaya}}</td>
            <div class="container">
                <div class="row">
                  <div class="col-sm">
                    <td><a href="{{route('university.edit', $item ->id)}}"  class="btn btn-success">edit</a></td>
                </div>
                  <div class="col-sm">
                    <td><a href="{{route('university.show', $item ->id)}}" class="btn btn-primary">show</a></td>
                </div>
                <div class="col-sm">
                    <td><a href="', $item ->id) }}">Edit</a>
                    </td>
                </div>
                  <div class="col-sm">
                    <td>
                        <form action="{{route('university.destroy', $item ->id)}}" method="POST">
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

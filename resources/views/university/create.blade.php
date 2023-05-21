@extends('university.layout')
@section('content')

<form action="{{route('university.store')}} " method="POST">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label"> nom d'university'</label>
      <input name="name" value="{{Auth::guard('admin')->user()->name}}" type="" class="form-control" id="name" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="wilaya" class="form-label">nom de wilaya</label>
      <input name="wilaya" type="" class="form-control" id="wilaya">
    <button type="submit" class="btn btn-primary">save</button>
  </form>


@endsection

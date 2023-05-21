@extends('university.layout')
@section('content')

<form action="{{route('university.update', $university->id)}} " method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label for="name" class="form-label"> {{$university->name}}'</label>
    </div>
    <div class="mb-3">
      <label for="wilaya" class="form-label">{{$university->wilaya}}</label>
    </div>
          </div>
    <button type="submit" class="btn btn-primary">update</button>
  </form>


@endsection

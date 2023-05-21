@extends('faculty.layout')
@section('content')

<form action="{{route('faculty.store')}} " method="POST">
    @csrf
    <div class="mb-3">
      <label for="nom" class="form-label"> nom de la faculty</label>
      <input name="nom" type="" class="form-control" id="nom" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="university_id" class="form-label">university name:</label>
        <select name="university_id" class="form-control">
            @foreach($universities as $university)
                <option value="{{ $university->id }}">{{ $university->name }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">save</button>
  </form>


@endsection

@extends('dep.layout')
@section('content')

<form action="{{route('dep.store')}} " method="POST">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label"> nom du departement'</label>
      <input name="name" type="" class="form-control" id="name" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="faculty_id" class="form-label">facultu id:</label>
        <select name="faculty_id" class="form-control">
            @foreach($faculties as $faculty)
                <option value="{{ $faculty->id }}">{{ $faculty->nom }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">save</button>
  </form>


@endsection

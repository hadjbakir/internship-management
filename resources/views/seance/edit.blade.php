@extends('seance.layout')
@section('content')

<form action="{{route('seance.update', $seance->id)}} " method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="demande_id" class="form-label">student name:</label>
        <select name="demande_id " class="form-control">
            @foreach($demande as $demande)
                <option value="{{ $seance->id }}">{{ $demande->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="delai" class="form-label"> delai</label>
        <input name="delai" value="{{ $seance->delai }}" type="" class="form-control" id="delai" aria-describedby="emailHelp">
      </div>    <div class="mb-3">
        <label for="date" class="form-label"> date</label>
        <input name="date" value="{{ $seance->date }}" type="" class="form-control" id="date" aria-describedby="emailHelp">
      </div>    <div class="mb-3">
        <label for="hentre" class="form-label"> heure entre</label>
        <input name="hentre" value="{{ $seance->hentre }}" type="" class="form-control" id="hentre" aria-describedby="emailHelp">
      </div>    <div class="mb-3">
        <label for="hsorti" class="form-label"> nom de la faculty</label>
        <input name="hsorti" value="{{ $seance->hsorti }}" type="" class="form-control" id="hsorti" aria-describedby="emailHelp">
      </div>    <div class="mb-3">
        <label for="observation" class="form-label"> nom de la faculty</label>
        <input name="observation" value="{{ $seance->observation }}" type="" class="form-control" id="observation" aria-describedby="emailHelp">
      </div>
    <button type="submit" class="btn btn-primary">save</button>
  </form>


@endsection

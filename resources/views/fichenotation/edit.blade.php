@extends('fichenotation.layout')
@section('content')

<form action="{{route('fichenotation.update', $fichenotation->id)}} " method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="university_id" class="form-label">university name:</label>
        <select name="demande_id" class="form-control">
            @foreach($demande as $demande)
                <option value="{{ $demande->id }}">{{ $demande->id }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="discipline"  class="form-label"> nom de la faculty</label>
        <input name="discipline" value="{{$fichenotation->discipline}}" type="" class="form-control" id="discipline" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="aptitude" class="form-label"> nom de la faculty</label>
        <input name="aptitude" value="{{$fichenotation->aptitude}}" type="" class="form-control" id="aptitude" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="initiative" class="form-label"> nom de la faculty</label>
        <input name="initiative" value="{{$fichenotation->initiative}}" type="" class="form-control" id="initiative" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="imagination" class="form-label"> nom de la faculty</label>
        <input name="imagination" value="{{$fichenotation->imagination}}" type="" class="form-control" id="imagination" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="conaissance" class="form-label"> nom de la faculty</label>
        <input name="conaissance" value="{{$fichenotation->conaissance}}" type="" class="form-control" id="conaissance" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="note" class="form-label"> nom de la faculty</label>
        <input name="note" type="" value="{{$fichenotation->note}}" class="form-control" id="note" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="appreciation" class="form-label"> nom de la faculty</label>
        <input name="appreciation" value="{{$fichenotation->appreciation}}" type="" class="form-control" id="appreciation" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="envoi" class="form-label"> nom de la faculty</label>
        <input name="envoi" value="{{$fichenotation->envoi}}" type="" class="form-control" id="envoi" aria-describedby="emailHelp">
    </div>
    <button type="submit" class="btn btn-primary">save</button>
  </form>


@endsection

@extends('layouts.nav')
@section('edit-table')
@section('title')
edit id : {{$liv->id}}
@endsection
   <form method="POST" action="{{ route('update', $liv->id) }}">
      @csrf
      @method('PUT')
      itle:<br/>
      <input type="text" name='title' value="{{$liv->titre}}" required><br/><br/>
      annee de pub: <br/>
      <input type="number" name="anneeP" value="{{$liv->anneePub}}" required><br/><br/>
      numbre de page :<br/>
      <input type="number" name="nbrPag" value="{{$liv->nbrPag}}" required><br><br>
      auteur_id :<br>
      <input type="text" name="auteur_id" value="{{$liv->auteur_id}}" required><br><br>
      <button type="submit">Save Changes</button>
  </form>
@endsection

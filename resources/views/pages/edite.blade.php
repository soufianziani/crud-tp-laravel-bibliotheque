@extends('layouts.nav')
@section('edit-table')
@section('title')
edit id : {{$liv->id}}
@endsection
<h1 class="text-center">Edit liver : {{$liv->titre}}</h1>
   <form method="POST" action="{{ route('update', $liv->id) }}">
      @csrf
      @method('PUT')
      itle:<br/>
      <input type="text" name='title' value="{{$liv->titre}}" required><br/><br/>
      annee de pub: <br/>
      <input type="number" name="anneeP" value="{{$liv->anneePub}}" required><br/><br/>
      numbre de page :<br/>
      <input type="number" name="nbrPag" value="{{$liv->nbrPag}}" required><br><br>
      auteur : <br>
      <select name="auteur_id">
         @foreach ($auteur as $auteure)
           <option value="{{ $auteure->id }}" {{ $liv->auteur_id == $auteure->id ? 'selected' : '' }}>
             {{ $auteure->nom }}
           </option>
         @endforeach
       </select>
      <button type="submit">Save Changes</button>
   </form>
   @endsection
   
   {{-- <input type="text" name="auteur_id" value="{{$liv->auteur_id}}" ><br><br> --}}
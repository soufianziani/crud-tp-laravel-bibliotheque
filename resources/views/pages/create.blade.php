

@extends('layouts.nav')
@section('title')
Create New Liver
@endsection
@section('create')
<h1 class="text-center">Create New Liver </h1>
   <form action="{{Route('str')}}" method="POST" >
      @csrf
      title:<br/>
      <input type="text" name='title' required><br/><br/>
      annee de pub: <br/>
      <input type="number" name="anneeP" required><br/><br/>
      numbre de page :<br/>
      <input type="number" name="nbrPag" required><br><br>
      auteur : <br>
      <select name="auteur_id">
         @foreach ($auteur as $auteure)
           <option value="{{ $auteure->id }}" {{ $auteure->id == $auteure->id ? 'selected' : '' }}>
             {{ $auteure->nom }}
           </option>
         @endforeach
       </select><br/>
      <input type="submit" value="submit data">
   </form>
@endsection
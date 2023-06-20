


@extends('layouts.nav')

@section('title')
Home 
@endsection

@section('list-table')
<h1 class="text-center">list Livers : </h1>
<table class="table mt-5">
   <thead>
      <tr>
         <th>id</th>
         <th>titre</th>
         <th>annee de pub</th>
         <th>number des pages</th>
         <th>id auteurs</th>
         <th>Actions</th>
      </tr>
   </thead>
   <tbody>
      @foreach ( $livre as $elem )
      <tr>
         <td>{{$elem->id}}</td>
         <td>{{$elem->titre}}</td>
         <td>{{$elem->anneePub}}</td>
         <td>{{$elem->nbrPag}}</td>
         <td>{{$elem->auteur->prenom}} {{$elem->auteur->nom}}</td>
         <td>
            <form action="{{ route('del' , $elem->id) }}" method="post">
               @csrf
               @method('DELETE')
               <input type="submit" value='delete' onclick="return confirm('you want delete this liver  ?')">
            </form>
            <button><a href="{{ route('edit' , $elem->id)}}">Edite</a></button>
         </td>
      </tr>
      @endforeach
   </tbody>
</table>
<div class="d-flex justify-content-center">
   {{ $livre->links()}}
</div>

@endsection

     

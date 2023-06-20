@extends('layouts.nav')
@section('title')
auteurs list 
@endsection
@section('list-table')
<table class="table mt-5">
   <thead>
      <tr>
         <th>id</th>
         <th>nom</th>
         <th>prenom</th>
         
      </tr>
   </thead>
   <tbody>
      @foreach ( $auteur as $elem )
      <tr>
         <td>{{$elem->id}}</td>
         <td>{{$elem->nom}}</td>
         <td>{{$elem->prenom}}</td>
         
         <td>
            {{-- <form action="{{ route('del' , $elem->id) }}" method="post">
               @csrf
               @method('DELETE')
               <input type="submit" value='delete' onclick="return confirm('you want delete this liver  ?')">
            </form> --}}
            {{-- <button><a href="{{ route('edit' , $elem->id)}}">Edite</a></button> --}}
         </td>
      </tr>
      @endforeach
   </tbody>
</table>
@endsection
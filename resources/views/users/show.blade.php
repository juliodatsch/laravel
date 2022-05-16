
@extends('layouts.app')

@section('title', 'listagem dos usuarios')

@section('content')
<h1 class="text-3xl font-semibold leading-tigh py-2">listagem de usuario {{$user->name}}</h1>
<table>
<tbody>
   
    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-center" >
        Nome
    </th>
    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-center" >
        E-mail
    </th>
    <tr>
        <th class="px-5 py-5 border-b border-gray-100  bg-gray-50 text-left ">    {{ $user->name }}</th>
    
        <th class="px-5 py-5 border-b border-gray-100  bg-gray-50 text-left ">    {{ $user->email }}</th>
   
    </tr>
  

</tbody>
</table>

    <form action="{{route('users.destroy',$user->id)}}" method="post">
        @method('DELETE')
        @csrf
    <button type="submit" class="rounded-full  text-white my-5 px-6 py-2	 shadow bg-red-500">Deletar</button>
    
    
    
    </form>

@endsection
@extends('layouts.app')

@section('title', 'Listagem dos Usuarios')

@section('content')
<h1 class="text-3xl font-semibold leading-tigh py-2">
Listagem dos usuários
<a href="{{route('users.create')}}" class="bg-blue-900 rounded-full text-white px-4 text-sm">+</a></h1>

<form action="#" method="get" class="py-5">
    <input type="text" name="search" placeholder="Pesquisar" class="md:w-1/6 bg-gray-200 py-1 rounded appearance-none text-left text-center">
    <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline-none rounded	 py-1 px-5 text-left text-white text-center ">Pesquisar</button>
</form>
<table class="min-w-full leading-normal shadow-md rounded-lg overflow-hidden">
    <thead>
        <tr>
            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-center" >
                Nome
            </th>
            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-center" >
                E-mail
            </th>
            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-center" >
                Editar
            </th>
            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-center" >
                Detalhes
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
    
        <tr>
            <td class="px-5 py-5 border-b border-gray-100  bg-gray-50 text-left text-center">    {{ $user->name }}</td>
            <td class="px-5 py-5 border-b border-gray-100  bg-gray-50 text-left text-center">    {{ $user->email }}</td>
            <td class="px-5 py-5 border-b border-gray-100  bg-gray-50 text-left text-center">   
                <a href="{{route('users.edit', $user->id)}}" class="rounded-full px-6 py-2	 shadow bg-green-500"  >Editar</a>
           
                </td>
            <td class="px-5 py-5  border-b border-gray-100  bg-gray-50 text-left text-center">  
                <a href="{{route('users.show', $user->id)}}" class="rounded-full px-6 py-2	 shadow bg-yellow-300"  >Detalhes</a>
                </td>
        </tr>
      
    @endforeach
    </tbody>
</table>

@endsection
@extends('layouts.app')

@section('title', 'listagem do usuarios')

@section('content')
<h1>listagem <a href="{{route('users.create')}}">(+)</a></h1>

<form action="#" method="get">
    <input type="text" name="search" placeholder="pesquisar">
    <button>Pesquisar</button>
</form>

<ul>
    @foreach ($users as $user)
    
    <li>
        {{ $user->name }}-
        {{ $user->email }}
        | <a href="{{route('users.show', $user->id)}}"  >ver</a>
        | <a href="{{route('users.edit', $user->id)}}"  >editar</a>
    </li>

@endforeach
</ul>
@endsection
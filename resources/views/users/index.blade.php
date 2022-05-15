@extends('layouts.app')

@section('title', 'listagem do usuarios')

@section('content')
<h1>listagem <a href="{{route('users.create')}}">(+)</a></h1>

<ul>
    @foreach ($users as $user)
    
    <li>
        {{ $user->name }}-
        {{ $user->email }}
        | <a href="{{route('users.show', $user->id)}}"  >ver</a>
    </li>

@endforeach
</ul>
@endsection
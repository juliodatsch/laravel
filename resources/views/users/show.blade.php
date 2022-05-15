
@extends('layouts.app')

@section('title', 'listagem dos usuarios')

@section('content')
<h1>listagem de usuario{{$user->name}}</h1>

<ul>
    <li>{{$user->name}}</li>
    <li>{{$user->email}}</li>
</ul>
@endsection
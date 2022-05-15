@extends('layouts.app')
@section('title',"editar o usuario{{$user->name}}" )
@section('content')
<h1>editar o usuario{{$user->name}}</h1>

@include('includes.validations-forms')
<form action="{{ route('users.update', $user->id) }}" method="post">
    @method('PUT')
    @include('users._partials.form')



</form>
@endsection
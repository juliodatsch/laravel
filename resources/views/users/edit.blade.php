@extends('layouts.app')
@section('title',"Editar o usuario" )
@section('content')
<h1 class="text-3xl font-semibold leading-tigh py-2">Editar o Usuario {{$user->name}}</h1>

@include('includes.validations-forms')
<form action="{{ route('users.update', $user->id) }}" method="post">
    @method('PUT')
    @include('users._partials.form')



</form>
@endsection
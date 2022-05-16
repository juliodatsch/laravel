@extends('layouts.app')
@section('title','novo usuario' )
@section('content')
<h1 class="text-3xl font-semibold leading-tigh py-2">Novo Usuario</h1>
@include('includes.validations-forms')
<form action="{{route('users.store')}}" method="post">
    @csrf
    @include('users._partials.form')



</form>
@endsection
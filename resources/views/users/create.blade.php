@extends('layouts.app')
@section('title','novo usuario' )
@section('content')
<h1>novo usuario</h1>
@include('includes.validations-forms')
<form action="{{route('users.store')}}" method="post">
    @csrf
    @include('users._partials.form')



</form>
@endsection
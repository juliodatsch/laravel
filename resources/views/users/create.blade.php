@extends('layouts.app')
@section('title','novo usuario' )
@section('content')
<h1>novo usuario</h1>

@if($errors->any())
    <ul class="errors">
        @foreach($errors->all() as $error)

        <li class="error">{{$error}}</li>

        @endforeach
    </ul>
@endif
<form action="{{route('users.store')}}" method="post">
    @csrf
    <input id="user" type="text" name="name" placeholder="Seu Nome" value="{{old('name')}}" class="form-control"/>
    <input id="email" type="email" name="email" placeholder="Seu Email"  value="{{old('email')}}" class="form-control"/>
    <input  id="pass" type="password" name="password" placeholder="Sua Senha"  class="form-control"/>

    <div class="d-grid gap-2">
        <button class="btn btn-primary" type="submit">Enviar</button>
      </div>



</form>
@endsection
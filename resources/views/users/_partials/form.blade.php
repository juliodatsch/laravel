@csrf
<input id="user" type="text" name="name" placeholder="Seu Nome" value="{{$user->name ?? old('name')}}" class="form-control"/>
<input id="email" type="email" name="email" placeholder="Seu Email"  value="{{$user->email ?? old('name') }}" class="form-control"/>
<input  id="pass" type="password" name="password" placeholder="Sua Senha"  class="form-control"/>

<div class="d-grid gap-2">
    <button class="btn btn-primary" type="submit">Enviar</button>
  </div>
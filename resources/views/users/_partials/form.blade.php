@csrf
<input id="user" type="text" name="name" placeholder="Seu Nome" value="{{$user->name ?? old('name')}}" class="md:w-1/6 bg-gray-200 py-1 rounded appearance-none text-left text-center"/>
<input id="email" type="email" name="email" placeholder="Seu Email"  value="{{$user->email ?? old('name') }}" class="md:w-1/6 bg-gray-200 py-1 rounded appearance-none text-left text-center"/>
<input  id="pass" type="password" name="password" placeholder="Sua Senha"  class="md:w-1/6 bg-gray-200 py-1 px-5 rounded appearance-none text-left text-center"/>

<div class="d-grid gap-2">
    <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline-none rounded	 py-1 px-5 text-left text-white text-center my-5	 " type="submit">Enviar</button>
  </div>
@extends('layout.plantilla')


@section('contenido')
<div class="flex justify-center">
    <div class="flex justify-center w-96">
      <form action="{{route('users.store')}}" method="post"  class="flex flex-col p-3 w-96">
        @csrf
        <label class="p-3" for="name">Nombre:</label>
        <input type="text" id="name" name="name" class="p-2 border border-gray-400 rounded-md" required>

        <label class="p-3" for="lastname">Apellido:</label>
        <input type="text" id="lastname" name="lastname" class="p-2 border border-gray-400 rounded-md" required>

        <label class="p-3" for="email">Correo:</label>
        <input type="tel" id="email" name="email" class="p-2 border border-gray-400 rounded-md" required>

        <label class="p-3" for="birthday">Fecha de nacimiento:</label>
        <input type="date" id="birthday" name="birthday" class="p-2 border border-gray-400 rounded-md " required>

        <label class="p-3" for="specialization">Especializacion:</label>
        <input type="text" id="	specialization" name="specialization" class="p-2 border border-gray-400 rounded-md " required>

        <label class="p-3" for="rol">Rol:</label>
        <input type="text" id="rol" name="rol" class="p-2 border border-gray-400 rounded-md " required>



        <button type="submit" class="p-3 px-4 py-2 mt-10 text-white bg-blue-500 rounded-md hover:bg-blue-600">Registrar</button>
      </form>
    </div>
  </div>


@endsection

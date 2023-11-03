@extends('layouts.app')

@section('titulo')
    Registrate en Devstagram
@endsection

@section('contenido')
    <div class="md:flex">
        <div class="md:w-7/12 flex items-center p-10">
            <img class="rounded-xl" src="{{asset('img/img1.jpeg')}}" alt="imagen registrarse">
        </div>
        <div class="md:w-5/12 shadow-xl rounded-xl p-10">
            <form action="" method="POST">
                @csrf
                <div class="mb-5">
                    <label class="mb-2 block uppercase text-gray-500 font-bold" for="name">Nombre</label>
                    <input class="border p-3 w-full rounded-lg" type="text" name="name" id="name" placeholder="Nombre">
                    @error('name')
                        <p class="bg-blue-500 text-white rounded-lg text-sm p-1 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label class="mb-2 block uppercase text-gray-500 font-bold" for="apellidos">Apellidos</label>
                    <input class="border p-3 w-full rounded-lg" type="text" name="apellidos" id="apellidos" placeholder="Nombre">
                    @error('apellidos')
                        <p class="bg-blue-500 text-white rounded-lg text-sm p-1 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label class="mb-2 block uppercase text-gray-500 font-bold" for="identificacion">Documento de Identificacion</label>
                    <input class="border p-3 w-full rounded-lg" type="text" name="identificacion" id="identificacion" placeholder="Ingrese el username">
                    @error('identificacion')
                        <p class="bg-blue-500 text-white rounded-lg text-sm p-1 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label class="mb-2 block uppercase text-gray-500 font-bold" for="email">E-mail</label>
                    <input class="border p-3 w-full rounded-lg" type="email" name="email" id="email" placeholder="Ingrese el e-mail">
                    @error('email')
                        <p class="bg-blue-500 text-white rounded-lg text-sm p-1 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label class="mb-2 block uppercase text-gray-500 font-bold" for="password">Contraseña</label>
                    <input class="border p-3 w-full rounded-lg" type="password" name="password" id="password" placeholder="Ingrese su contraseña">
                    @error('password')
                        <p class="bg-blue-500 text-white rounded-lg text-sm p-1 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label class="mb-2 block uppercase text-gray-500 font-bold" for="confirmar">Confirmar contraseña</label>
                    <input class="border p-3 w-full rounded-lg" type="password" name="confirmar" id="confirmar" placeholder="Ingrese su contraseña de nuevo">
                    @error('confirmar')
                    <p class="bg-blue-500 text-white rounded-lg text-sm p-1 text-center">{{ $message }}</p>
                @enderror
                </div>
                <div>
                    <input type="submit" value="Crear cuenta" class="p-3 bg-red-500 w-full rounded-xl mt-3 font-bold text-white cursor-pointer hover:bg-red-400 transition-colors uppercase">
                </div>
            </form>
        </div>
    </div>
@endsection
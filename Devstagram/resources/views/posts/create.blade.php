@extends('layouts.app')

@section('titulo')
    Creando una nueva Publicación
@endsection

@section('contenido')
    <div class="md:flex md:items-center">
        <div class="md:w-1/2 px-10">
            imagen aquí
        </div>

        <div class="md:w-1/2 p-10 bg-white rounded-lg shadow mt-10 md:mt-0">
            <form action="{{ route('register') }}" method="POST" novalidate>
                @csrf
                <div class="mb-5">
                    <label for="titulo" class="mb-2 block uppercase text-gray-500 font-bold">Titulo</label>
                    <input type="text" id="titulo" name="titulo" placeholder="Tu titulo"
                           class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror"
                           value="{{old('titulo')}}">
                    @error('titulo')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">Username</label>
                    <input type="text" id="username" name="username" placeholder="Tu nombre"
                           class="border p-3 w-full rounded-lg @error('username') border-red-500 @enderror"
                           value="{{old('username')}}">
                    @error('username')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">Email</label>
                    <input type="email" id="email" name="email" placeholder="Tu nombre de Usuario"
                           class="border p-3 w-full rounded-lg @error('email') border-red-500 @enderror"
                           value="{{old('email')}}">
                    @error('email')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">Password</label>
                    <input type="password" id="password" name="password" placeholder="Contraseña de registro"
                           class="border p-3 w-full rounded-lg @error('password') border-red-500 @enderror">
                    @error('password')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">Repetir
                        Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation"
                           placeholder="Confirma tu contraseña"
                           class="border p-3 w-full rounded-lg @error('password') border-red-500 @enderror">
                    @error('password')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>

                <input type="submit" value="Crear Cuenta"
                       class="bg-sky-600 transition-colors cursor-pointer uppercase font-bold w-full p-3  text-white rounded-lg">

            </form>
        </div>
    </div>
@endsection
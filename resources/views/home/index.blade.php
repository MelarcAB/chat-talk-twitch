@extends('layout.app')

@section('content')
    <div class="container mx-auto px-4 mt-4">
        <!-- Bienvenida -->
        <div class="mb-8 text-center">
            <h1 class="text-4xl font-bold mb-2">¡Bienvenido, {{ auth()->user()->name }}!</h1>
            <p class="text-xl">Esta es tu página de inicio. Descubre todas las funciones que ChatTalk tiene para ti.</p>
        </div>

        <!-- Panel de control del usuario -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Nuevo panel: Seleccionar Usuario -->
            <div class="bg-white shadow rounded p-6">
                <h2 class="text-2xl font-bold mb-4"><i class="fas fa-users text-red-500"></i> Conecta con tu audiencia</h2>
                <p>Selecciona un usuario para interactuar en directo.</p>
                <button class="mt-4 w-full py-2 px-4 bg-red-500 text-white rounded hover:bg-red-700">Seleccionar
                    Usuario</button>
            </div>

            <!-- Avatar y Voz -->
            <div class="bg-white shadow rounded p-6">
                <h2 class="text-2xl font-bold mb-4"><i class="fas fa-user-circle text-purple-500"></i> Tu Avatar y Voz</h2>
                <p>Aquí puedes personalizar tu avatar y voz.</p>
                <button class="mt-4 w-full py-2 px-4 bg-purple-500 text-white rounded hover:bg-purple-700">Editar</button>
            </div>
            <!-- Historial -->
            <div class="bg-white shadow rounded p-6">
                <h2 class="text-2xl font-bold mb-4"><i class="fas fa-history text-blue-500"></i> Tu Historial</h2>
                <p>Consulta tus interacciones pasadas con los streamers.</p>
                <button class="mt-4 w-full py-2 px-4 bg-blue-500 text-white rounded hover:bg-blue-700">Ver
                    Historial</button>
            </div>
            <!-- Streamers Favoritos -->
            <div class="bg-white shadow rounded p-6">
                <h2 class="text-2xl font-bold mb-4"><i class="fas fa-star text-yellow-500"></i> Tus Streamers Favoritos</h2>
                <p>Administra tu lista de streamers favoritos.</p>
                <button class="mt-4 w-full py-2 px-4 bg-yellow-500 text-white rounded hover:bg-yellow-700">Ver
                    Lista</button>
            </div>
        </div>

        <!-- Instrucciones -->
        <div class="mt-8">
            <h2 class="text-2xl font-bold mb-4"><i class="fas fa-info-circle text-green-500"></i> Instrucciones</h2>
            <p>¿No estás seguro de cómo utilizar ChatTalk? Consulta nuestras instrucciones detalladas.</p>
            <button class="mt-4 py-2 px-4 bg-green-500 text-white rounded hover:bg-green-700">Leer Instrucciones</button>
        </div>
    </div>
@endsection

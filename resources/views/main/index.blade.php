@extends('layout.app')

@section('content')
    <div
        class="flex flex-col items-center justify-center min-h-screen py-2 bg-gray-100 px-4 sm:px-6 lg:px-8 xl:px-20 2xl:px-40">
        <!-- Heading -->
        <div class="text-center mt-6 space-y-2">
            <h1 class="text-4xl font-extrabold text-gray-900">
                Bienvenido a ChatTalk
            </h1>
            <p class="text-lg text-gray-600">
                Transforma tu experiencia de streaming en Twitch.
            </p>

        </div>

        <!-- Image -->
        <div class="flex justify-center mt-8">
            <img class="object-cover w-full max-w-2xl h-64 rounded-md " src="{{ asset('img/chat-talk-logo.png') }}"
                alt="Logo de ChatTalk">
        </div>

        <!-- Features -->
        <div class="mt-12 text-center space-y-2">
            <h2 class="text-2xl font-bold text-gray-900">
                Características
            </h2>
            <p class="text-lg text-gray-600">
                Convierte a tus espectadores en parte activa del stream, elige avatares y mucho más.
            </p>
            <p class="text-md text-gray-500">
                Explora todas las posibilidades que ChatTalk tiene para ofrecerte. Únete y lleva tu interacción con los
                espectadores al siguiente nivel.
            </p>
        </div>

        <!-- Login with Twitch Button -->
        <div class="flex justify-center mt-10">
            <a href="{{ route('twitch.redirect') }}"
                class="px-6 py-3 text-lg font-bold text-white bg-purple-600 rounded hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2">
                <i class="fab fa-twitch mr-2"></i>
                Inicia sesión con Twitch
            </a>
        </div>

        <!-- Footer -->
        <div class="mt-12 mb-4 text-center">
            <p class="text-sm text-gray-500">
                © {{ date('Y') }} ChatTalk. Todos los derechos reservados.
            </p>
        </div>
    </div>
@endsection

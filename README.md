# ChatTalk 

ChatTalk es una aplicación web que une a los streamers y espectadores de Twitch de formas nuevas e interactivas. Permite a los streamers seleccionar a un espectador en el chat para interactuar directamente, con el chat del espectador convertido en audio en tiempo real.

Esta aplicación se construye con Laravel, utiliza jQuery y Alpine.js para el comportamiento dinámico del lado del cliente, Tailwind CSS para el estilo, y Font Awesome para los íconos.

## Características principales

- **Autenticación de Twitch**: Los usuarios se registran y acceden con sus cuentas de Twitch.
- **Conversión de texto a voz**: Los mensajes de chat se convierten en audio en tiempo real.
- **Interactividad del usuario**: Los streamers pueden seleccionar a un usuario para interactuar directamente en el chat.
- **Interfaz de usuario personalizable**: Los usuarios pueden personalizar su avatar y voz.

## Configuración y Despliegue

1. Clonar el repositorio
2. Entrar en la carpeta del proyecto: `cd chat-talk-twitch`
3. Instalar las dependencias de composer: `composer install`
4. Copiar el archivo `.env.example` a `.env`: `cp .env.example .env` 
5. Configurar las variables de entorno en el archivo `.env`, como la base de datos, las credenciales de la API de Twitch, etc.
6. Generar una clave de aplicación: `php artisan key:generate`
7. Migrar la base de datos: `php artisan migrate`
8. Correr la aplicación: `php artisan serve`
9. Npm run build

## Herramientas Utilizadas

- [Laravel 10](https://laravel.com)
- [Alpine.js](https://github.com/alpinejs/alpine)
- [jQuery](https://jquery.com)
- [Tailwind CSS](https://tailwindcss.com)
- [Font Awesome](https://fontawesome.com)


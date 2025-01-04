<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="max-w-7xl mx-auto px-4">
        <h1>Welcome to the Home Page</h1>
    </div>
    <p>Bienvenido a la página principal</p>
    <x-alert type="info" class="mb-4">
        <x-slot name="titleAlert">
            Alerta!
        </x-slot>
        Contenido de la alerta
    </x-alert>
    <p>Hola Mundo </p>
</body> 
</html>
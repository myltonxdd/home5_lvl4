<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body class="h-screen w-screen bg-gray-200">
    <div class="flex flex-col justify-center items-center h-full gap-4">
        <h1 class=" text-red-600 text-2xl font-bold ">REGISTRAR EL USUARIO</h1>
        <form action="api/home5" method="POST" class="flex flex-col gap-2 border p-3 rounded-lg border-black bg-white">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" placeholder="Ingrese el nombre" class="border border-black p-1">

            <label for="apellido">Apellido:</label>
            <input type="text" name="apellido" placeholder="Ingrese el apellido" class="border border-black p-1">

            <label for="email">Email:</label>
            <input type="email" name="email" placeholder="Ingrese el email" class="border border-black p-1">

            <label for="password">Contraseña:</label>
            <input type="text" name="password" placeholder="Ingrese la contraseña" class="border border-black p-1">
        
        <button type="submit" class="border rounded-lg bg-blue-600 p-1">Guardar</button>
    </div>
    
</form>
</body>
</html>


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Show</title>

    </head>
    <body>
        <h1>Local</h1>
        <ul>
            <li>Nome: {{ $place->name }}</li>
            <li>Descrição: {{ $place->description  }}</li>    
            <li>Endereço: {{ $place->address }}</li>
        </ul>
        <a href="/places/edit/{{$place->id}}">Editar</a>
    </body>
</html>

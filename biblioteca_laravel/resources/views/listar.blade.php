<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Biblioteca</title>

    </head>
    <body>
        <h1>Editar Livros</h1>
        <form action="/editar-livro/{{ $livros-> id }}" method="POST">
            @csrf
            <label for="lblTitulo">Título do Livro:</label>
            <input type="text" name="titulo" value="{{ $livros->titulo }}">
            <br><br>
            <label for="lblAutor">Autor do Livro:</label>
            <input type="text" name="autor" value="{{ $livros->autor }}">
            <br><br>
            <button type="submit">Editar</button>
        </form>
    </body>
</html>

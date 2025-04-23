<?php

require 'dados.php';

$id = $_REQUEST['id'];

$filtrado = array_filter($livros, function ($l) use ($id) {
    return $l['id'] == $id;
});

$livro = array_pop($filtrado);



/*
views

M => daods

V => HTML

C => Fornecer dados a view e manupular os models
*/

?>





<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookWise</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-stone-950 text-stone-200">
    <header class="bg-stone-900">

        <nav class="mx-auto max-w-screen-lg flex justify-between px-8 py-4">
            <div class="font-bold text-xl tracking-wide">Book Wise</div>

            <ul class="flex space-x-4 font-bold">
                <li><a href="index.php" class="text-emerald-600">Explorar</a></li>
                <li><a href="/meus-livros.php" class="hover:underline">Meus Livros</a></li>
            </ul>
            <ul>
                <li><a href="/login.php" class="hover:underline">Fazer Login</a></li>
            </ul>
        </nav>
    </header>

    <main class="mx-auto max-w-screen-lg space-y-6">


        ID do livro <?= $id ?>
        <div class=" p-2 rounded border-stone-800 border-2 bg-stone-900">

            <div class="flex">
                <div class="w-1/3">imagem</div>
                <div class="space-y-1">
                    <a href="livro.php?id=<?= $livro['id'] ?>" class="font-semibold hover:underline"><?= $livro['titulo'] ?></a>

                    <div class="text-xs italic"><?= $livro['autor'] ?></div>

                    <div class="text-xs italic">***** (3 Avaliações)</div>
                </div>

            </div>

            <div class="text-sm space-y-2">
                <?= $livro['descricao'] ?>
            </div>
        </div>

    </div>

    </main>



</body>

</html>
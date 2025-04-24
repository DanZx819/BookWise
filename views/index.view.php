<form action="" class="w-full flex space-x-2">
    <input type="text" class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none py-1 px-2 mt-6" placeholder="Pesquisar..." name="pesquisar">

    <button type="submit" class="mt-6">Buscar</button>

</form>

<section class="grid gap-4 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
    <?php
    foreach ($livros as $livro): ?>


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

    <?php endforeach; ?>
</section>
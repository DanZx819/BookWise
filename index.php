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
                <li><a href="/" class="text-emerald-600">Explorar</a></li>
                <li><a href="/meus-livros.php" class="hover:underline">Meus Livros</a></li>
            </ul>
            <ul>
                <li><a href="/login.php" class="hover:underline">Fazer Login</a></li>
            </ul>
        </nav>
    </header>

    <main class="mx-auto max-w-screen-lg space-y-6" > 

       


        <form action="" class="w-full flex space-x-2">
            <input type="text" class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none py-1 px-2 mt-6" placeholder="Pesquisar..." name="pesquisar">

            <button type="submit" class="mt-6">Buscar</button>

        </form>

        <section class="grid gap-4 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
            
            <div class=" p-2 rounded border-stone-800 border-2 bg-stone-900">

                <div class="flex">
                    <div class="w-1/3">imagem</div>
                    <div>
                        <a href="livro.php" class="font-semibold hover:underline">Titulo</a>

                        <div class="text-xs italic">autor</div>

                        <div class="text-xs italic">***** (3 Avaliações)</div>
                    </div>
                    
                    </div>
                    
                    <div class="text-sm">
                        descrição
                    </div>
                </div>

            </div>


            

                

            </div>
        </section>
    </main>



</body>
</html>
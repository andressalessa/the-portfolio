<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Andressa Lessa</title>

    <!-- Fonte do Google -->
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Asap&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Maven+Pro&display=swap" rel="stylesheet">
    <link
        rel="stylesheet"
        type="text/css"
        href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/regular/style.css" />

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Configurando Tailwind para usar a fonte -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        inconsolata: ['Inconsolata', 'monospace'],
                        asap: ['Asap', 'sans-serif'],
                        maven: ['Maven Pro', 'sans-serif']
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-gray-950 text-white">

    <?php include('./components/header.php') ?>

    <main class="bg-[#18181E] px-3 py-6">
        <div class="max-w-screen-xl mx-auto text-center mb-12">
            <p class="font-inconsolata text-red-400 text-xl">Meu trabalho</p>
            <h2 class="font-asap text-2xl md:text-3xl font-bold">Veja os projetos em destaque</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-screen-lg mx-auto" id="projetos">
            <?php include('./components/projects.php') ?>
        </div>
    </main>

    <?php include('./components/footer.php') ?>
</body>

</html>
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
    <header class="space-y-3 pt-[120px] bg-[url('/assets/Background_Intro.png')] bg-cover bg-center h-screen">
        <?php include('./components/header.php') ?>
    </header>

    <footer class="space-y-1 pt-[120px] bg-[url('/assets/Background_Contacts.png')] bg-cover bg-center h-screen">
        <div class="flex justify-center">
            <p class="font-inconsolata mt-10 text-xl text-purple-400">Contato
            </p>
        </div>
        <div class="flex justify-center">
            <p class="font-asap font-black text-2xl">Gostou do meu trabalho?</p>
        </div>
        <div class="flex justify-center">
            <p class="font-maven text-center text-gray-400 text-md">
                Entre em contato ou acompanhe as minhas redes sociais!
            </p>
        </div>
        <!-- 
            O group determina que o container pai será o grupo de hover 
            e aí é possível usar no filho que desejar receber o comportamento quando o pai for hover o group-hover 
        -->
        <div class="flex flex-col items-center gap-4 pt-4">
            <?php include('./components/social-buttons.php') ?>
        </div>
    </footer>
</body>

</html>
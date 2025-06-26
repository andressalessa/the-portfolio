<?php
$projects = [
    [
        'img' => './assets/project1.png',
        'title' => 'Travelgram',
        'alt' => 'Meu projeto rede social',
        'description' => 'Rede social onde as pessoas mostram os registros de suas viagens pelo mundo',
        'stack' => [ 'PHP', 'CSS', 'HTML', 'JavaScript'],
    ],
    [
        'img' => './assets/project2.png',
        'title' => 'Página de receita',
        'alt' => 'Meu projeto receitas',
        'description' => 'Página com o passo a passo de uma receita para cupcakes',
        'stack' => [ 'PHP', 'CSS', 'HTML', 'JavaScript'],
    ],
    [
        'img' => './assets/project3.png',
        'title' => 'Tech News',
        'alt' => 'Meu projeto news',
        'description' => 'Homepage de um portal de notícias sobre a área de tecnologia',
        'stack' => [ 'PHP', 'CSS', 'HTML', 'JavaScript'],
    ],
    [
        'img' => './assets/project4.png',
        'title' => 'Refund',
        'alt' => 'Meu projeto refund',
        'description' => 'Um sistema para pedido e acompanhamento de reembolso ',
        'stack' => [ 'PHP', 'CSS', 'HTML', 'JavaScript'],
    ],
    [
        'img' => './assets/project5.png',
        'title' => 'Página de turismo',
        'alt' => 'Meu projeto turismo',
        'description' => 'Página com as principais informações para quem quer viajar para Busan',
        'stack' => [ 'PHP', 'CSS', 'HTML', 'JavaScript'],
    ],
    [
        'img' => './assets/project6.png',
        'title' => 'Zingen',
        'alt' => 'Meu projeto zingen',
        'description' => 'Landing Page completa e responsiva de um aplicativo de Karaokê',
        'stack' => [ 'PHP', 'CSS', 'HTML', 'JavaScript'],
    ],
];

$colors = ['fuchsia', 'lime', 'sky', 'rose', 'amber', 'teal', 'purple'];

?>

<?php foreach ($projects as $projeto): ?>

    <div class="group bg-gray-800 rounded-xl p-4 flex gap-4 shadow-lg hover:ring-2 hover:ring-gray-600">
        <img class="w-48 h-40 group-hover:shadow-xl" src="<?= $projeto['img'] ?>" alt="<?= $projeto['alt'] ?>" class="rounded-lg">
        <div class="flex flex-col">
            <h3 class="text-lg font-semibold"><?= $projeto['title'] ?></h3>
            <p class="text-sm text-gray-200"><?= $projeto['description'] ?></p>
            <div class="mt-auto space-x-1">
                <?php foreach ($projeto['stack'] as $color => $stack): ?>
                    <span class="bg-<?= $colors[$color] ?>-500 text-black px-3 py-1 rounded-full text-xs font-bold">
                        <?= $stack ?>
                    </span>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

<?php endforeach; ?>
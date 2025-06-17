<div class="flex justify-center">
    <img
        src="./assets/me.png"
        alt="Foto de perfil"
        class="w-32 h-32 rounded-full border-4 border-pink-500 mx-auto" />
</div>
<div class="flex justify-center">
    <p class="font-inconsolata mt-10">Hello World! Meu nome é
        <span class="text-lime-400 text-xl">
            Andressa Lessa
        </span> e eu sou
    </p>
</div>
<div class="flex justify-center">
    <p class="font-asap font-black text-5xl">Desenvolvedora Full-Stack</p>
</div>
<div class="flex justify-center">
    <p class="font-maven text-center text-wrap text-gray-400 text-sm mt-2">
        Transformo necessidades em aplicações reais, envolventes e funcionais.
        Desenvolvo sistemas através da </br>
        minha paixão pela tecnologia, contribuindo com soluções inovadoras e eficazes para desafios complexos.
    </p>
</div>

<?php
$techs = [
    [
        'color' => '#82BC4F',
        'label' => 'GitHub',
    ],
    [
        'color' => '#BB72E9',
        'label' => 'PHP',
    ],
    [
        'color' => '#3996DB',
        'label' => 'CSS',
    ],
    [
        'color' => '#E3646E',
        'label' => 'HTML',
    ],
    [
        'color' => '#EABD5F',
        'label' => 'JavaScript',
    ],
];
?>

<div class="flex items-center justify-center pt-[70px] space-x-3 font-bold">
<?php foreach ($techs as $tech): ?>
  <span class="bg-[<?= $tech['color'] ?>] text-black px-3 py-1 rounded-full text-sm"><?= $tech['label'] ?></span>
<?php endforeach; ?>
</div>
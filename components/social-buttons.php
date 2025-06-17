<?php
$buttons = [
    [
        'href' => 'https://www.linkedin.com/in/andressalessa/',
        'icon' => 'ph-linkedin-logo',
        'label' => 'Linkedin',
    ],
    [
        'href' => 'https://www.instagram.com/andressalessa/',
        'icon' => 'ph-instagram-logo',
        'label' => 'Instagram',
    ],
    [
        'href' => 'https://github.com/andressalessa',
        'icon' => 'ph-github-logo',
        'label' => 'GitHub',
    ],
    [
        'href' => 'https://email',
        'icon' => 'ph-envelope-simple',
        'label' => 'E-mail',
    ],
];
?>

<?php foreach ($buttons as $button): ?>

    <div class="group bg-gray-800 flex items-center justify-between text-gray-300 py-3 px-4 w-96 rounded-xl border border-transparent hover:border-sky-600 transition">
        <div class="flex items-center gap-2">
            <i class="ph <?= $button['icon'] ?> text-3xl text-gray-300 group-hover:text-sky-600 transition"></i>
            <span><?= $button['label'] ?></span>
        </div>

        <a href="<?= $button['href'] ?>" target="_blank">
            <i class="ph ph-arrow-up-right text-2xl text-sky-600"></i>
        </a>
    </div>

<?php endforeach; ?>
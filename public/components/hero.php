<?php
$itens = [
    ['href' => '#projectos', 'src' => '../public/img/facebook.png',     'alt' => 'Facebook Logo'],
    ['href' => '#',          'src' => '../public/img/youtube-play.png', 'alt' => 'Youtube Logo'],
    ['href' => '#',          'src' => '../public/img/facebook.png',     'alt' => 'Facebook Logo'],
    ['href' => '#',          'src' => '../public/img/youtube-play.png', 'alt' => 'Youtube Logo'],
];
?>

<section class="flex gap-x-3">
    <!-- Titulo e Descrição -->
    <div class="w-2/3">
        <h2 class="text-3xl font-bold"> Oi, meu nome e Jotta</h2>
        <p class="text-xl leading-6 mt-6">
            Falando um pouco sobre mim, sou um desenvolvedor web que adora criar coisas novas e aprender novas tecnologias.
            Especializado em PHP-Laravel e Html, mas tambem tenho comhecimento em outras linguagens como Java-SpringBoot, C e c#.
        </p>

        <ul class="flex gap-x-3 mt-3">
            <?php foreach ($itens as $item): ?>
                <li><a href="<?= $item['href'] ?>" class="_blank"><img class="h-8 hover:animate-bounce" src="<?= $item['src'] ?>" alt="<?= $item['alt'] ?>"></a></li>
            <?php endforeach; ?>
        </ul>
    </div>

    <!-- Imagem -->
    <div class="w-1/3 flex items-center justify-center">
        <img class="h-60 hover:animate-pulse" src="../public/img/Lucie-2.png" alt="Foto Principal ">
    </div>

</section>
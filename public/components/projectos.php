<?php
$projectos = [
    [
        "titulo"     => "Meu Portfolio",
        "finalizado" => false,
        "ano"        => 2021,
        "descricao"  => "My first portfolio in PHP e HTML  ",
        "stack"      => ["PHP", "HTML", "CSS", "Js"],
        "img"        => "../public/img/projecto.png",
    ],
    [
        "titulo"     => "TAsk",
        "finalizado" => true,
        "ano"        => 2021,
        "descricao"  => "Task in PHP e HTML  ",
        "stack"      => "",
        "stack"      => ["PHP", "HTML", "CSS", "Js"],
        "img"        => "../public/img/projecto.png",

    ],
    [
        "titulo"     => "Meu Portfolio",
        "finalizado" => false,
        "ano"        => 2021,
        "descricao"  => "My first portfolio in PHP e HTML  ",
        "stack"      => ["PHP", "HTML", "CSS", "Js"],
        "img"        => "../public/img/projecto.png",

    ],
];
?>

<section class="space-y-3 py-6">
    <h2 class="text-2xl font-bold"> Meus Projectos</h2>

    <?php foreach ($projectos as $projecto): ?>
        <!-- projecto -->
        <div class="bg-slate-800 rounded-lg p-3 flex items-center space-x-3">
            <div class="w-1/5 flex items-center justify-middle">
                <img class="h-42 rounded-md shadow-lg shadow-slate-900 " src="<?= $projecto['img'] ?>">
            </div>
            <div class="w-4/5 space-y-3">
                <div class="flex gap-3 justify-between ">
                    <h3 class="font-semibold text-xl">
                        <?php if ($projecto['finalizado']): ?>§ <?php endif; ?>
                    <?= $projecto['titulo'] ?>
                    <?php if ($projecto['finalizado']):  ?>
                        <span class="text-xs text-gray-400 opacity-80 italic">(Finalisado em <?= $projecto['ano'] ?>)</span>
                    <?php else:  ?>
                        <span class="text-xs text-gray-400 opacity-80 italic">(em desenvolvimento)</span>
                    <?php endif; ?>
                    </h3>
                    <div class="space-x-1">
                        <?php
                        $color = ['fuchsia', 'lime', 'sky', 'rose', 'amber', 'teal', 'purple',];
                        foreach ($projecto['stack'] as $posicao => $language):
                        ?>
                            <span class="bg-<?= $color[$posicao] ?>-400 text-<?= $projecto[$posicao] ?>-900 rounded-md px-2 py-1 font-semibold text-xs">
                                <?= $language ?>
                            </span>
                        <?php endforeach; ?>
                    </div>
                </div>

                <p class="leading-6">
                    <?= $projecto['descricao'] ?>
                </p>

            </div>

        </div>
    <?php endforeach; ?>
</section>
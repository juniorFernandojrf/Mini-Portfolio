<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portefólio Tailwind</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-900 text-white">
  <header class="mx-auto max-w-screen-lg px-3 py-6 flex items-center justify-between">
    <!-- Logo -->
    <div class="font-bold text-xl text-cian-600 ">
      Meu Portfolio
    </div>

    <!-- Link -->
    <div class="">
      <div class="flex gap-x-3 font-medium text-gray-200">
        <li><a href="" class="hover:underline ">Projetos</a></li>
        <li><a href="" class="hover:underline ">GitHub</a></li>
        <li><a href="" class="hover:underline ">LinkedIn</a></li>
        <li><a href="" class="hover:underline ">Twitter</a></li>
      </div>
    </div>

  </header>

  <main class="mx-auto max-w-screen-lg min-h-20 px-3 py-6">

    <!-- hero -->
    <section class="flex gap-x-3">
      <!-- Titulo e Descrição -->
      <div class="w-2/3">
        <h2 class="text-3xl font-bold"> Oi, meu nome e Jotta</h2>
        <p class="text-xl leading-6 mt-6">
          Falando um pouco sobre mim, sou um desenvolvedor web que adora criar coisas novas e aprender novas tecnologias.
          Especializado em PHP-Laravel e Html, mas tambem tenho comhecimento em outras linguagens como Java-SpringBoot, C e c#.
        </p>

        <ul class="flex gap-x-3 mt-3">
          <li><a href="#" class="_blank"><img src="/public/img/facebook.png" alt="Facebook"></a></li>
          <li><a href=""><img src="/public/img/youtube-play.png" alt="youTube"></a></li>
          <li><a href="#" class="_blank"><img src="/public/img/facebook.png" alt="Facebook"></a></li>
          <li><a href=""><img src="/public/img/youtube-play.png" alt="youTube"></a></li>
        </ul>
      </div>

      <!-- Imagem -->
      <div class="w-1/3 flex items-center justify-center">
        <img src="/public/img/Lucie-2.png" alt="Foto Principal ">
      </div>

    </section>

    <!-- Projectos -->
    <section class="space-y-3 py-6">
      <h2 class="text-2xl font-bold"> Meus Projectos</h2>

      <!-- projecto -->
      <div class="bg-slate-800 rounded-lg p-3 flex items-center">
        <div class="w-1/5">Foto do Projecto</div>
        <div class="w-4/5 space-y-3">
          <div class="flex gap-3 justify-between ">
            <h3 class="font-semibold text-xl">
              Projecto 1 <span class="text-xs text-gray-400 opacity-80 italic">(Finalisado em 2024)</span>
            </h3>
            <div>
              <span class="bg-fuchsia-400 text-fuchsia-900 rounded-md px-2 py-1 font-semibold text-xs">PHP</span>
              <span class="bg-lime-400 text-lime-900 rounded-md px-2 py-1 font-semibold text-xs">Javascript</span>
              <span class="bg-sky-400 text-sky-900 rounded-md px-2 py-1 font-semibold text-xs">HTML</span>
              <span class="bg-rose-400 text-rose-900 rounded-md px-2 py-1 font-semibold text-xs">Java</span>
            </div>
          </div>

          <p class="leading-6">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis, dolorum at. Tempore veniam reiciendis non, necessitatibus officia odit molestiae molestias illum repellendus id reprehenderit ratione recusandae illo, suscipit libero. Fugiat.
          </p>

        </div>

      </div>
    </section>
  </main>

  <footer class="mx-auto max-w-screen-lg min-h-20">
    <div class="border-t border-600 pt-6 px-3 text-gray-400 text-sm">
      Copyright 2025. Construido po mim mesmo
    </div>

  </footer>

</body>

</html>
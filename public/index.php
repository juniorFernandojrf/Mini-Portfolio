<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portefólio Tailwind</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-900 text-white">
  <!-- header -->
  <?php include('../public/components/header.php') ?>

  <main class="mx-auto max-w-screen-lg min-h-20 px-3 py-6">
    <!-- hero -->
    <?php include('../public/components/hero.php') ?>

    <!-- Projectos -->
    <?php include('../public/components/projectos.php') ?>

  </main>

  <footer class="mx-auto max-w-screen-lg min-h-20">
    <div class="border-t border-600 pt-6 px-3 text-gray-400 text-sm">
      Copyright <?= date('Y') ?>. Construido por mim mesmo :) .
    </div>

  </footer>

</body>

</html>
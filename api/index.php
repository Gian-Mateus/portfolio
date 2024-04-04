<?php
require_once __DIR__.'/../vendor/autoload.php';
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="../assets/svgs/escanor-logo.svg" type="image/x-icon">
    <link rel="stylesheet" href="../assets/style.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Gian Mateus- Desenvolvedor Web</title>
  </head>
  <body class="bg-gradient-primary bg-no-repeat bg-cover h-full min-h-screen flex flex-col text-white">
    <nav x-data="{ open: window.innerWidth >= 768 }" @resize.window="open = window.innerWidth >= 768" class="px-16 flex md:flex-row flex-col justify-between items-center">
      <div class="flex items-center w-full md:w-auto justify-between">
        <img class="w-16" src="../assets/svgs/escanor-logo.svg" alt="Logo">
        <button @click="open = !open" class="md:hidden w-10 h-10">
          <img src="./assets/svgs/menu.svg" alt="Menu">
        </button>
      </div>
      <div x-show="open" class="md:flex md:items-center md:gap-x-5 w-full md:w-auto" x-transition.duration.500ms>
        <ul class="flex flex-col md:flex-row gap-x-5 gap-y-5 text-end">
          <li><a href="/">Home</a></li>
          <li><a href="/about">Sobre</a></li>
          <li><a href="/tecnoproj">Tecnologias e Projetos</a></li>
          <li><a href="/contact">Contatos</a></li>
        </ul>
      </div>
    </nav>
    <div id="app" class="container min-h-full mx-auto flex flex-col flex-1 justify-center items-center">
      <?php
        use App\ControlRoutes\Routes;
        Routes::render()
      ?>
    </div>
    
    <?php
      if(Routes::getRoute() == "contact"){
        return;
      } else{
        require_once __DIR__."/public/views/footer.php";
      }
    ?>
    <script src="../assets/main.js"></script>
  </body>
</html>

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="coopers" />
    <meta
      name="description"
      content="Apareça em todos os lugares, incluindo o Google."
    />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri()?>/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <title><?php bloginfo('name')?></title>
    <? wp_head();?>
  </head>
  <body>
    <header class="header">
      <img src="<?php echo get_stylesheet_directory_uri()?>/img/Logo.png" alt="Logo Coopers" />
      <div class="header-links">
        <a href="#">Planos e preços</a>
        <a href="#" class="enter">entrar</a>
      </div>
    </header>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title><?php bloginfo('name'); echo " - "; bloginfo('description');?></title>
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css" integrity="sha384-v2Tw72dyUXeU3y4aM2Y0tBJQkGfplr39mxZqlTBDUZAb9BGoC40+rdFCG0m10lXk" crossorigin="anonymous">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/fontawesome.css" integrity="sha384-q3jl8XQu1OpdLgGFvNRnPdj5VIlCvgsDQTQB6owSOHWlAurxul7f+JpUOVdAiJ5P" crossorigin="anonymous">
      <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
      <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
      <!-- <script src="<?php bloginfo('template_url'); ?>/js/pace.min.js"></script> -->
      <!-- <script src="<?php bloginfo('template_url'); ?>/js/toogle.js"></script> -->
      <!-- <link href="<?php bloginfo('template_url'); ?>/css/pace-theme-minimal.css" rel="stylesheet" /> -->
      <link href="<?php bloginfo('template_url'); ?>/css/balloon.css" rel="stylesheet" />
      <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/geral.css">
      <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/plugins.css">
      <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/<?php echo $style; ?>.css">
      <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/animate.css">
      <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.png" />
      <?php wp_head(); ?>
   </head>
   <body>
      <nav class="menu-responsivo" id="responsivo">
         <ul>
            <li><a href="aortomed.html">A Ortomed</a></li>
            <li><a href="corpoclinico.html">Corpo Clínico</a></li>
            <li><a href="especialidades.html">Especialidades</a></li>
            <li><a href="procedimentos.html">Procedimentos</a></li>
            <li><a href="convenios.html">Convênios</a></li>
            <li><a href="contato.html">Contato</a></li>
         </ul>
      </nav>
      <div class="layout">
      <header>
         <div class="top-bar boxshadow">
         <div class="container">
            <div class="telefone">	
               <span>+55 (77) 2101-0500</span><a onclick="toogleFunction()" class="toggle" href="javascript:;"><i class="fas fa-bars"></i></a>
            </div>
            <div class="social">
               <ul>
                  <li>
                     <a href="https://www.facebook.com/ortomedpoliclinica/" target="_blank"><i class="fa fa-facebook-f"></i></a>
                  </li>
                  <li>
                     <a href="http://webmail.ortomed.med.br/" target="_blank"><i class="fa fa-envelope"></i></a>
                  </li>
               </ul>
            </div>
            <div class="logo">
               <div class="logo-align">
                  <a href="index.php">
                  <img src="<?php bloginfo('template_url'); ?>/images/logo-ortomed.png" alt="Logo Ortomed">
                  </a>
               </div>
               <div class="clear">			
                  <?php include('includes/organisms/menu.php'); ?>
               </div>
            </div>
            <div class="logo-ortomed-nome">
               <div class="logo-ortomed-align">
                  <a href="<?php echo home_url(); ?>">
                  <img src="<?php bloginfo('template_url'); ?>/images/ortomed-nome.png"  alt="Logo Ortomed">
                  </a>
               </div>
               <div class="clear">
                  <div class="logo-policlinica-nome">
                     <a href="index.php">
                     <img src="<?php bloginfo('template_url'); ?>/images/policlinica-nome.png" alt="Logo Ortomed">
                     </a>
                  </div>
                  <div class="barra"></div>
               </div>
               <p><strong >Medicina</strong> <strong>Especializada</strong></p>
            </div>
         </div>
      </header>
      <main>
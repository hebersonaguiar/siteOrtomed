<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title><?php bloginfo('name'); echo " - "; bloginfo('description');?></title>
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css" integrity="sha384-v2Tw72dyUXeU3y4aM2Y0tBJQkGfplr39mxZqlTBDUZAb9BGoC40+rdFCG0m10lXk" crossorigin="anonymous">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/fontawesome.css" integrity="sha384-q3jl8XQu1OpdLgGFvNRnPdj5VIlCvgsDQTQB6owSOHWlAurxul7f+JpUOVdAiJ5P" crossorigin="anonymous">
      <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
      <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/<?php echo $style; ?>.css">
      <script src="<?php bloginfo('template_url'); ?>/js/pace.min.js"></script>
      <link href="<?php bloginfo('template_url'); ?>/css/pace-theme-minimal.css" rel="stylesheet" />
      <link href="<?php bloginfo('template_url'); ?>/css/balloon.css" rel="stylesheet" />
      <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/plugins.css">
      <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.png" />
      <?php wp_head(); ?>
   </head>
   <body>
      <style>
         <?php if(get_the_post_thumbnail()) : ?>
         header{
         background-image: url('<?php the_post_thumbnail_url(); ?>');
         }
         <?php else : ?>
         header{
         background-image: url('<?php  bloginfo('template_url'); ?>/images/slide-inter.jpg');
         }
         <?php endif; ?>
      </style>
      <header>
         <div class="top-bar boxshadow">
            <div class="container">
               <div class="telefone">	
                  <span><a href="tel:7721010500%20">+55 (77) 2101-0500</a></span>
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
                     <a href="<?php echo home_url(); ?>">
                     <img src="<?php bloginfo('template_url'); ?>/images/logo-ortomed.png" alt="Logo Ortomed">
                     </a>
                  </div>
                  <div class="clear">			
                     <?php include('includes/organisms/menu.php'); ?>
                  </div>
               </div>
               <div class="aortomed-nome">
                  <div class="slide-aortomed">
                     <h1><?php the_title(); ?></h1>
                  </div>
                  <div class="barra"></div>
               </div>
            </div>
         </div>
      </header>
      <main>
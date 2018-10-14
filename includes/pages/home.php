<div class="container">
   <section class="sec-ortomed">
      <div class="aortomed">
         <h1>A Ortomed</h1>
         <div class="barra"></div>
         <?php if(have_posts()): ?>
            <?php while(have_posts()): the_post(); ?>
            <?php endwhile; ?>
         <?php endif; ?>
         <p>A Ortomed atua em Vitória da Conquista há mais de 30 anos em diversas especialidades e tem como objetivo prestar com excelência e qualidade serviços de saúde, sempre oferecendo um acompanhamento individualizado e completo através de procedimentos seguros e priorizando sempre uma análise minuciosa de cada caso. O nosso corpo clinico conta com profissionais experientes e altamente qualificados... </p>
      </div>
      <div class="especialidades">
         <div class="img-angiologia">
            <h1>Ortopedia</h1>
            <div class="barra-white"></div>
            <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/ortopedia.jpg" alt="Ortopedia Ortomed"></a>						
         </div>
         <div class="clear"></div>
         <div class="img-traumatologia">
            <h1>Traumatologia</h1>
            <div class="barra-black"></div>
            <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/traumatologia.jpg" alt="Traumatologia Ortomed"></a>
         </div>
         <div class="clear"></div>
         <div class="img-reumatologia">
            <h1>Reumatologia</h1>
            <div class="barra-white"></div>
            <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/reumatologia.jpg" alt="Reumatologia Ortomed"></a>
         </div>
      </div>
   </section>
</div>
</main>	
<main class="second">
   <div class="container">
      <!-- <section class="sec-rpg"> -->
         <?php if ( function_exists( 'soliloquy' ) ) { soliloquy( '164' ); } ?>
<!--          <div class="rpg">
            <h1>Rpg</h1>
            <div class="clear"></div>
            <p>Reeducação Postural Global</p>
            <div class="barra"></div>
         </div>
         <div class="rpg-image">
            <img src="<?php bloginfo('template_url'); ?>/images/rpg.jpg" alt="Reeducação Postural Global">
         </div>
         <div class="clear"></div>
         <div class="texto-rpg">
            <p>Reeducação Postural Global (ou sua marca registrada RPG) é uma forma de Fisioterapia desenvolvida na França por Philippe Emmanuel Souchard, a partir do trabalho de Françoise Mézières e de vários anos de estudos e pesquisas em Biomecânica e Física.</p>
            <div class="clear"></div>
         </div>
         <div class="saibamais">					
            <a href="#" class="botao medio">Saiba Mais</a>
         </div> -->
      <!-- </section> -->
   </div>
</main>
<main class="third-main">
   <section class="sec-convenios">
      <div class="container">
         <div class="convenios-itens">
            <h1>Convênios</h1>
            <div class="barra"></div>
            <div class="icone-planserv">
               <a href="convenios"><img src="<?php bloginfo('template_url'); ?>/images/planserv.png" alt="Planserv"></a>
            </div>
            <div class="icone-medial">
               <a href="convenios"><img src="<?php bloginfo('template_url'); ?>/images/medial-saude.png" alt="Medial"></a>
            </div>
            <div class="icone-saude-caixa">
               <a href="convenios"><img src="<?php bloginfo('template_url'); ?>/images/saude-caixa.png" alt="Saude Caixa"></a>
            </div>
            <div class="icone-amil">
               <a href="convenios"><img src="<?php bloginfo('template_url'); ?>/images/amil.png" alt="Amil"></a>
            </div>
         </div>
      </div>
   </section>
</main>
<main class="fourth-main">
   <section class="sec-contato">
      <div class="container">
         <div class="funcionamento">
            <a href="contato">
               <div class="logo-ortomed-contato">
                  <img src="<?php bloginfo('template_url'); ?>/images/ortomed-nome-branco.png" alt="Ortomed Logo">
               </div>
               <div class="horario">
                  <ul>
                     <li>Segunda a Quinta: 07:00 às 19:00</li>
                     <li>Sexta: 07:00 às 18:00</li>
                     <li>Sábado: 07:00 às 12:00</li>
                  </ul>
               </div>
               <div class="endereco-main">
                  <p>Avenida Bartolomeu de Gusmão, 726</p>
                  <p>Viiiiitória da Conquista, Bahia</p>
               </div>
            </a>
         </div>
         <div class="clear"></div>
         <div class="contato-box">
            <h1>Contato</h1>
            <form>
            <?php 
               wp_get_single_post(1);
               the_content();
            ?>
            </form>
         </div>
      </div>
   </section>
</main>
<main class="fifth-main">
<section class="sec-medias">
   <div class="container">
      <div class="iframe-face">
         <span>facebook</span>
         <div class="clear"></div>
         <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fortomedpoliclinica%2F&tabs=timeline&width=320&height=400&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="320" height="400" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
         <div class="iframe-insta">
            <span>instagram</span>
            <div class="clear"></div>
            <blockquote width="320" height="400" class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/BgQ-Rqfhtyl/" data-instgrm-version="8" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width: 320px; height:400px;><div style="padding:8px;">
               <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:50.0% 0; text-align:center; width:100%;">
                  <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;"></div>
               </div>
               <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/BgQ-Rqfhtyl/" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">Uma publicação compartilhada por Ortomed Policlínica (@ortomed)</a> em <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2018-03-13T13:32:53+00:00">13 de Mar, 2018 às 6:32 PDT</time></p>
         </div>
         </blockquote> <script async defer src="//www.instagram.com/embed.js"></script>
      </div>
   </div>
   </div>
</section>

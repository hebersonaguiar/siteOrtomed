<div class="container">
   <section class="sec-procedimentos">

   <div class="thumb">
       <?php
            global $more;
            $more = 0;
            query_posts('cat=4');
            if(have_posts()) : while(have_posts()) : the_post();
         ?>
         <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id($target_post_id), 'single-post-thumbnail' ); ?>
         <img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>">
         <div class="text">
               <h1><?php the_title(); ?></h1>
               <p><?php  the_content(); ?></p>
               <h2><a href="<?php the_permalink(); ?>">Saiba Mais...</a></h2>
         </div>
         <?php
            endwhile;
            endif;
            wp_reset_query();
         ?>
   </div>


     <!--  <div class="thumb-um">
         <?php $target_post_id = '92'; 
            if (has_post_thumbnail($target_post_id) ): ?>
         <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id($target_post_id), 'single-post-thumbnail' ); ?>
         <img src="<?php echo $image[0]; ?>" alt="Viscossuplementação">
         <?php endif; ?>
         <div class="text">
            <?php $queried_post = get_post(92); ?>
            <h1><?php echo $queried_post->post_title; ?></h1>
            <p><?php  echo $queried_post->post_content; ?></p>
            <h2><a href="#">Saiba Mais...</a></h2>
         </div>
      </div>
      <div class="thumb-dois">
         <?php $target_post_id = '96'; 
            if (has_post_thumbnail($target_post_id) ): ?>
         <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id($target_post_id), 'single-post-thumbnail' ); ?>
         <img src="<?php echo $image[0]; ?>" alt="Densitometria Óssea">
         <?php endif; ?>
         <div class="text">
            <?php $queried_post = get_post(96); ?>
            <h1><?php echo $queried_post->post_title; ?></h1>
            <p><?php  echo $queried_post->post_content; ?></p>
            <h2><a href="#">Saiba Mais...</a></h2>
         </div>
      </div>
      <div class="thumb-tres">
         <?php $target_post_id = '98'; 
            if (has_post_thumbnail($target_post_id) ): ?>
         <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id($target_post_id), 'single-post-thumbnail' ); ?>
         <img src="<?php echo $image[0]; ?>" alt="Eletroneuromiografia">
         <?php endif; ?>
         <div class="text">
            <?php $queried_post = get_post(98); ?>
            <h1><?php echo $queried_post->post_title; ?></h1>
            <p><?php  echo $queried_post->post_content; ?></p>
            <h2><a href="#">Saiba Mais...</a></h2>
         </div>
      </div>
      <div class="thumb-quatro">
         <?php $target_post_id = '100'; 
            if (has_post_thumbnail($target_post_id) ): ?>
         <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id($target_post_id), 'single-post-thumbnail' ); ?>
         <img src="<?php echo $image[0]; ?>" alt="Punção Articular">
         <?php endif; ?>
         <div class="text">
            <?php $queried_post = get_post(100); ?>
            <h1><?php echo $queried_post->post_title; ?></h1>
            <p><?php  echo $queried_post->post_content; ?></p>
            <h2><a href="#">Saiba Mais...</a></h2>
         </div>
      </div>-->
   </section>
</div>
</main>	
<main class="second-main">
   <div class="container">
      <section class="sec-dep">
      </section>
   </div>
</main>
<main class="third-main">
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
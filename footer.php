</main>
<footer>
   <!-- <div class="container"> -->
   <div class="box-one">
      <div class="endereco">
         <!-- <a href="contato.html"> -->
            <span class="fas fa-map-marker-alt"></span>
            <p>Avenida Bartolomeu de Gusmão, 726</p>
            <p>Vitória da Conquista - BA</p>
         <!-- </a> -->
      </div>
   </div>
   <div class="box-two">
      <div class="email">
         <span class="fas fa-envelope"></span>
         <p>atendimento@ortomed.med.br</p>
      </div>
   </div>
   <div class="box-three">
      <div class="phone">
         <span class="fas fa-phone"></span>
         <p>+55 (77) 2101-0500</p>
      </div>
   </div>
   <div class="clear"></div>
   <div class="copyright">
      <p>Copyright © <?php echo date('Y'); ?> Ortomed | Desenvolvido por <a>Heberson Aguiar</a></p>
      <p>As informações disponíveis neste site são fornecidas apenas para fins informativos.</p>
   </div>
   <!-- </div> -->
</footer>
</div>
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
<script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};
    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("myBtn").style.display = "block";
        } else {
            document.getElementById("myBtn").style.display = "none";
        }
    }
    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
        // document.documentElement.scrollDuration = 700;
    }
</script>
<script src="<?php bloginfo('template_url'); ?>/bower_components/jquery/dist/jquery.min.js"></script>
<?php wp_footer(); ?>
</body>
</html>
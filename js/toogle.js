function toogleFunction() {
  document.getElementByClass("toggle").click(function(){
    ('.layout').toggleClass('ativo');
    ('.menu-responsivo').toggleClass('ativo');
    (this).toggleClass('ativo');
  });
}
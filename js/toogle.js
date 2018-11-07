function toogleFunction() {
  ('.toggle').onclick(function(){
    ('.layout').toggleClass('ativo');
    ('.menu-responsivo').toggleClass('ativo');
    (this).toggleClass('ativo');
  });
}
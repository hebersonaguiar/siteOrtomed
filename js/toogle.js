function toogleFunction() {
	// var element = document.getElementById("responsivo");
	// element.classList.add("ativo");
	if (!document.getElementsByClassName("ativo").length){
	    //class not there
	    var element = document.getElementById("responsivo");
		element.classList.add("ativo");
		elem.onclick.apply(elem);
	}
	else{
	//class there
		var element = document.getElementById("responsivo");
    	element.classList.remove("ativo");
	}
  // $('.toggle').click(function(){
  	// alert('Cancel action occurs!');
  //   ('.layout').toggleClass('ativo');
  //   ('.menu-responsivo').toggleClass('ativo');
  //   (this).toggleClass('ativo');
  // });
}
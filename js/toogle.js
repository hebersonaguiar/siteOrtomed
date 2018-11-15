function toogleFunction() {
	// var element = document.getElementById("responsivo");
	// element.classList.add("ativo");
	if (!document.getElementsByClassName('ativo').length){
	    //class not there
	}
	else{
	//class there
		var element = document.getElementById("bar");
    	element.classList.remove("fas fa-bars");
    	element.classList.add("fa fa-envelope");
	}
  // $('.toggle').click(function(){
  	// alert('Cancel action occurs!');
  //   ('.layout').toggleClass('ativo');
  //   ('.menu-responsivo').toggleClass('ativo');
  //   (this).toggleClass('ativo');
  // });
}
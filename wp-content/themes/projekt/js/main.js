window.onload = function(){
	var altImgs = document.querySelectorAll('.attachment-shop_single');
	for(var i = 0; i < altImgs.length; i++){
		altImgs[i].addEventListener('click', gallery);
	}
}
	
	function gallery(){
		var source = document.getElementById(this.id).firstChild.src;
		document.getElementById('mainImg').src = source;
	}

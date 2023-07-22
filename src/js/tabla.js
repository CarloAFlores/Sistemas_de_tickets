var tbrow = document.querySelectorAll(".tbrow");

//Iterate
for(var x = 0;x< tbrow.length;x++){
	tbrow[x].addEventListener("mouseover", function(){
		var z = document.querySelectorAll(".active");
		if(z.length > 0){
			document.querySelector(".active").classList.remove("active");

		}
		this.classList.add("active");
	});
	tbrow[x].addEventListener("mouseout", function(){
		document.querySelector(".active").classList.remove("active");
	});
}
var dem=1;
var chay;
function next() {

	if(dem>4){dem=1}
		document.slideshow.src="imgtk/"+dem+".jpg";
		dem++;
	
}
function back() {

	if(dem<1){dem=4}
		document.slideshow.src="imgtk/"+dem+".jpg";
		dem--;
	
}

chay=setInterval(function(){ next();},3000);
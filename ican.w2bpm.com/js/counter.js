if ((document.getElementById && document.createElement("img")) && window.addEventListener || window.attachEvent){
(function(){
var pics = [];
var load = [];
for(i = 0; i < 10; i++){
	pics[i]=i+".png";
}              
for(i = 0; i < pics.length; i++){
	load[i] = new Image();
	load[i].src = "/images/counter/"+pics[i];
}

var c = "";

//Stop Opera selecting anything whilst dragging! Not ideal, keep eye on this for future version probs.
if (window.opera)document.write("<input type='hidden' id='Q' value=' '>");

var y,x,z,temp1,temp2,dom;
var n = 500;
var timer = 1000;
random_timer *= 1000;
var disp = [];

function do_counter(){
	var v1,v2,v3;
	timer = Math.round(Math.random()*random_timer);
	counter_start_from++;
	v1 = counter_start_from.toString();
	v2 = v1.split("");
	v3 = counter_length-v2.length;
	for(i = 0; i < v2.length; i++){
		disp[i+v3].setAttribute("src", load[v2[i]].src);
	}
	setTimeout(do_counter,timer);
}

function init(){
if (document.getElementById("thecounter")){
 for(i = 0; i < counter_length; i++){
  disp[i] = document.createElement("img"); 
  disp[i].setAttribute("src", load[0].src); 
  disp[i].setAttribute("id", "dgts'+i+'");
  disp[i].setAttribute("width", "26"); 
  disp[i].setAttribute("height", "24"); 
  document.getElementById("thecounter").appendChild(disp[i]);
 }
 do_counter();
 }
}
if (window.addEventListener){
	window.addEventListener("load",init,false);
}  
else if (window.attachEvent){
	window.attachEvent("onload",init);
} 
})();
}//End.

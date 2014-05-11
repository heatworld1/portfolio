$(document).ready(function(){
$("#xhtml,#css,.footersect,#back-top,#word,#adobe,#vcf,#up,.normal,.smaller,.larger,.icon,#ask").fadeTo("slow", 0.7); // This sets the opacity of the thumbs to fade down to 60% when the page loads

$("#xhtml,#css,.footersect,#back-top,#word,#adobe,#vcf,#up,.normal,.smaller,.larger,.icon,#ask").hover(function(){
$(this).fadeTo("slow", 1.0); // This should set the opacity to 100% on hover
},function(){
$(this).fadeTo("slow", 0.7); // This should set the opacity back to 60% on mouseout
});
});
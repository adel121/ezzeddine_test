
jQuery(function($) {
    var i=0;

var intervalId = setInterval(function() {

if (i%2==0) {
$("#firstone").fadeOut();
$("#firstone").fadeOut("slow");
$("#firstone").fadeOut(7000);

$("#secondone").fadeIn();
$("#secondone").fadeIn("slow");
$("#secondone").fadeIn(7000);
}

else {
$("#firstone").fadeIn();
$("#firstone").fadeIn("slow");
$("#firstone").fadeIn(7000);

$("#secondone").fadeOut();
$("#secondone").fadeOut("slow");
$("#secondone").fadeOut(7000);

}

i = i + 1;
i = i % 2;

},5000);
    
});






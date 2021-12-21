

var slides = document.querySelectorAll(".slide");
var dots = document.querySelectorAll(".dot");
var titles= document.querySelectorAll(".service_activity_title");
var index = 0;
var time = 0;
var lock = 0;
var period = 50;
function prevSlide(n){
  index+=n;
  console.log("prevSlide is called");
  changeSlide();
}

function nextSlide(n){
  index+=n;
  changeSlide();
}

changeSlide();

function changeSlide(){
  if (lock == 0)
        time = 0;
  if(index>slides.length-1)
    index=0;
  
  if(index<0)
    index=slides.length-1;
  
  
  
    for(let i=0;i<slides.length;i++)
    {
      slides[i].style.display = "none";
      
      dots[i].classList.remove("active");
      let x = $('h1#service_activity_id_' + i);
      
      titles[i].style.left = "0%";
      
        
    }
     
    slides[index].style.display = "block";
    dots[index].classList.add("active");
    $(titles[index]).animate({left: "50%" }, "slow");


}


var intervalId = setInterval(function() {
if(time == period - 1) {
index++;
lock = 1;
changeSlide();
lock = 0;
}
time++;
time = time%period;

},1000);





$( ".dot" ).click(function() {
   var ID = $(this).attr('id');
   time=0;
   index = parseInt(ID);
   changeSlide();
});

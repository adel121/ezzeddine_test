<?php 

$number_of_images = get_field('number_of_images');

$images = array();
array_push($images, 'empty');
$index_array = array(
 1 => 'first',
 2 => 'second',
 3 => 'third',
 4 => 'fourth',
 5 => 'fifth',
 6 => 'sixth',
);

$i = 1;
while ($i <= $number_of_images) {
	array_push($images, get_field($index_array[$i] . '_image'));
	
	$i++;
}
/*
$i = 1;

while ($i <= $number_of_images) {

	echo $images[$i]['url'] . ' --> ' . $images[$i]['description'] . "<br>";

	$i++;
}
*/

get_header();

?>
 <div class="golden-separator" style="opacity:1"></div>

<section id="services_home_section">
   
<div id="service_title_container">
<h1 id="service_title" style="font-family: 'Cinzel Decorative', cursive;"> <?php echo get_the_title() . '<br> <div id="subtitle" ><p> ' . get_field("slogan") . '</p></div>'; ?>  </h1>
</div>
</section>


 <style>
	 


#services_home_section::before {
  content: "";
  position: absolute;
  top: 0; 
  left: 0;
  height: 100%;
  width: 100%;
  right: 0;
    opacity:0.4;
  z-index: -2;
  background: <?php echo "url('" . get_the_post_thumbnail_url() . "');" ?>
  background-repeat: no-repeat;
 background-size: 100% 100%; 
}




@media screen and  (max-width: 800px) {
    #services_home_section, .activity_image{
        /*height:600px;*/
        height:300px;
    }
    
    #service_title_container {
        width: 50%;
    }
   
}

    
</style>

<section id="services_section"> 

	<div class="golden-separator"></div>


<br>



<h3 style="font-family: 'philosopher', sans-serif; color: black; text-align:center ; font-weight: bold"><?php echo get_field("introduction_title"); ?></h3>
<div class="intro">
<p style="text-align:center; margin:30px; color:black">
<?php echo get_field("introduction_text"); ?></p>

</div>
  <hr>







  <!--Slider-->
<div id="slider">  
	<?php 
		$i = 1;
	while ($i <= $number_of_images) {
	?>
  <div class="slide" style="background: transparent;
; color:black">
<br>

	<h1 class="service_activity_title" id="service_activity_id_<?php echo $i-1; ?> " style="text-align:center; font-family:'Philosopher', sans-serif; color: <?php echo get_field($index_array[$i] . '_title_color'); ?> "><?php echo $images[$i]['caption']; ?></h1>
    <div class="golden-separator"></div>
    <img class="activity_image"  src="<?php echo $images[$i]['url'] ?>" >

    <br>

    <div class="description_container">
    <div  class="description" style="margin:auto; text-align: center;">
    
<div class="intro"><p style="text-align:center; margin:10px; color:black">	<?php echo $images[$i]['description']; ?> </p>
    </div> </div>
    </div>
  </div>
  
  <?php 
  $i++;
} ?>
  <!--Controlling arrows-->
  <span class="controls" onclick="prevSlide(-1)" id="left-arrow"><i class="fa fa-arrow-left" aria-hidden="true"></i>
</span>
  <span class="controls" id="right-arrow" onclick="nextSlide(1)"><i class="fa fa-arrow-right" aria-hidden="true"></i>
</span>
</div>
<br><br>
  <div id="dots-con">

  	<?php 
  	$i = 0;

  	while ($i < $number_of_images) {
  	?>
 <span class="dot" id="<?php echo $i ?>"></span>
 	<?php $i++; } ?>
 </div>

</section>
<?php get_footer(); ?>

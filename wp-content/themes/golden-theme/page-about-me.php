<?php get_header(); ?>


<section id="about">
	<div class="golden-separator"></div>


	<h1 style="font-family: 'philosopher', sans-serif;"> 

      <br>About <span style="color:#AE8625"> Me </span>  </h1>

      <p> A Trusted Partner You Can Rely On </p>

      <div class="row" style="width:95%; margin:auto">
      	
      	 	<div class="col-sm">
      		<div style="text-align:center;width: auto; height: auto; max-height: 100%; max-width: 100%;">
                
                <img  style="text-align:center;width: auto; height: auto; max-height: 100%; max-width: 100%;" 
                src="<?php echo get_the_post_thumbnail_url(); ?>">
      	
			</div>
      	</div>
      	<div class="col-sm">

      		<br><br><br>

      		
      		 <div class="container intro" style="vertical-align: middle;">
     		 <?php 

      	the_post();
      	the_content();
      

    		  ?>
      </div>

      	</div>

     
      </div>
     
  

</section>

<?php get_footer(); ?>
<!DOCTYPE html>
<html>
<head>
  <?php wp_head(); ?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Index Page</title>
	<?php 
?>	




<link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&family=Lobster&family=Meddon&family=Philosopher&family=Salsa&family=Spectral+SC:wght@200&display=swap" rel="stylesheet">

	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>


	<meta name="viewport" content="width=device-width, initial-scale=1">


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@700&family=Gilda+Display&family=Inconsolata:wght@200&family=Lora&display=swap" rel="stylesheet">
</head>
<body>
	<section class="navigation">
  <div class="nav-container">
    <a href="<?php echo site_url(); ?>" style="text-decoration:none">
    <div class="brand">
     <h3 class="brand-name animate-charcter">Mohammad Ezzeddine </h3> 
    <p class="brand-name-fc"><i>Freelance Financial Controller</i></p> 
    </div> 
    </a>
    <nav id='navnav'>
      <div class="nav-mobile"><a id="navbar-toggle" href="#!"><span></span></a></div>
      <ul class="nav-list">
        <li>
          <a href="<?php echo site_url(); ?>">Home</a>
        </li>
        <li>
          <a href="<?php echo site_url('about-me'); ?>">About Me</a>
        </li>
        
        
        <li>
          <a href="#!">Services</a>
          <ul class="navbar-dropdown">

            <?php 
               $allServices = new WP_Query(array(      
              'posts_per_page' => -1,
              'post_type' => 'service',
              'order' => 'ASC'
            ));

               while ($allServices->have_posts()) 
               {
                $allServices->the_post();

            ?>
            <li>

              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </li>
             

             <?php
           }
           wp_reset_postdata();
             ?>
          </ul>
        </li>
        <li>
          <a href="<?php echo site_url('articles'); ?>">Articles</a>
        </li>
        <li>
          <a href="<?php echo site_url('contact-me'); ?>">Contact Me</a>
         
        </li>
        <li style="background-image: linear-gradient(180deg, #dbbe63, #000); ">
          <a href="<?php echo site_url('free-consultation'); ?>" style="color: white;"><b>Free Consultation</b></a>
        </li>
      </ul>
      
    </nav>
   


  </div>
 
</section>

<style>
    
    
</style>
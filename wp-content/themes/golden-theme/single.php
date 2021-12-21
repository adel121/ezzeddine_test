<?php get_header(); ?>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&family=Lobster&family=Meddon&family=Philosopher&family=Roboto:wght@100&family=Salsa&family=Spectral+SC:wght@200&display=swap" rel="stylesheet">
	<?php 

	while (have_posts()) {

		the_post();

	//	the_post_thumbnail();
	//	the_title();
	//	echo get_the_date();
	//	the_content();

		?>



<section id="article">

	<div class="golden-separator"></div>
	<br><br>


	<h1 style="font-family: 'philosopher', sans-serif;"><span style="color:#AE8625">A</span>rticle: <?php the_title(); ?></h1>
	<div class="article_image_container">
      <img src="<?php  echo get_the_post_thumbnail_url();?> "class="article_image">
    
    </div>

    <?php echo get_the_date(); ?>

    <hr>

    <div class="container content content_styled" style="width:90%" >
    <?php the_content(); ?>
    </div>

</section>
       
      
		<?php
	}
	?>
<?php get_footer(); ?>
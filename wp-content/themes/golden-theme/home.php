<?php get_header(); ?>
<section id="articles_grid">
	
	<div class="golden-separator"> </div>

	<br> <br>

	<h1 class="articles_title"> <span style="color:#AE8625">A</span>rticles</h1>


	<br>

	

	


	<main>
			
			
			<div class="post-list post-list_grid">
			
				<?php 
			
				while(have_posts()) {

					the_post();
					
					?>


				<div class="post-list__post post" style="margin:20px; border-radius:0px">
					<figure class="post__preview-img">
						<a href="#"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="img description" /></a>
					</figure>
					
					<div class="post__header">
						<time datetime="2019-11-16"><?php echo get_the_date(); ?></time>
						<h2><a href="<?php the_permalink(); ?>" style="color:black"><?php the_title(); ?></a></h2>
					</div>


					
					<div class="post__meta">
						<?php 

						echo wp_trim_words(get_the_excerpt(),15); 

						?>


					</div>

					<a class="read_more"  href="<?php the_permalink(); ?>"> Read More </a>


				</div>
				
				
			
				<?php }  ?>
			</div><!-- / .post-list -->
			
		</main>
	<style>
	    .page-numbers {
	        color:black;
	        text-decoration:none;
	    }
	    .current {
	        
	        color: #AE8625;
	    }
	    
	    .page-numbers:hover {
	        font-weight:bold;
	        color:black;
	    }
	</style>
		<p style="color:black">
	<?php 
	echo paginate_links();
	?></p>
</section>
<?php get_footer(); ?>
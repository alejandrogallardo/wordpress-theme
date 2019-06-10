<?php get_header(); ?>

	<main class="container">

		<!-- <h1 class="text-center mt-5 text-secondary">Alejandro Blog</h1>
		<hr> -->
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="card"> <!-- Card Uno -->
                <?php
				if ( has_post_thumbnail() ) {
					the_post_thumbnail('post-thumbnails', array(
						'class' => 'img-fluid'
					));
				}
				?>
		<div class="row mb-2 mt-2"> <!-- main row -->

			<div class="col-md-12">
			
					<!-- <img src="http://lorempixel.com/800/800/" alt="" style="width: 100%; height: 500px; object-fit: cover;"> -->
					<div class="card-body">
						<div style="padding: 10px;">
							<h4><?php the_title(); ?></h4>
							<p class="text-justify"><?php the_content(); ?></p>
						</div>	
					</div>
				</div> <!-- Fin Card Uno -->
				<?php endwhile; endif; ?>
			</div>
		</div> <!-- fin main row -->
	</main>
	
	<?php get_footer(); ?> 
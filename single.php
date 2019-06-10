<?php get_header(); ?>

	<main class="container">

		<h1 class="text-center mt-5 text-secondary">Alejandro Blog</h1>
		<hr>

		<div class="row mb-5 mt-5"> <!-- main row -->

			<div class="col-md-8">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="card"> <!-- Card Uno -->
                <?php
				if ( has_post_thumbnail() ) {
					the_post_thumbnail('post-thumbnails', array(
						'class' => 'img-fluid'
					));
				}
				?>
					<!-- <img src="http://lorempixel.com/800/800/" alt="" style="width: 100%; height: 500px; object-fit: cover;"> -->
					<div class="card-body">
						<div style="padding: 10px;">
							<h4><?php the_title(); ?></h4>
							<p class="font-italic">By <strong><?php the_author(); ?></strong> on <strong><?php the_time('F j, Y'); ?></strong> in <strong><a href=""><?php the_category(' / '); ?></a></strong></p>
							<p>Tags: <?php the_tags('', ' / ', ''); ?></p>
							<p class="text-justify"><?php the_content(); ?></p>
							<a href="<?php bloginfo('url'); ?>" class="btn btn-info">Back</a>
						</div>	
					</div>
				</div> <!-- Fin Card Uno -->
				<?php endwhile; endif; ?>
			</div>

			<!-- Aside -->
			<div class="col-lg-4 col-md-12 alex"> <!-- col aside -->
				<?php get_sidebar(); ?>
			</div> <!-- fin col aside -->
		</div> <!-- fin main row -->
	</main>
	
	<?php get_footer(); ?> 
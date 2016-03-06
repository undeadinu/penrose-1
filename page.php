<?php get_header(); ?>

	<main id="content">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<h1><?php the_title(); ?></h1>

		<?php endif ?>



			<?php endwhile; else : ?>

					<article id="post-not-found" class="hentry">
							<header class="article-header">
								<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
						</header>
							<section class="entry-content">
								<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
						</section>
						<footer class="article-footer">
								<p><?php _e( 'This is the error message in the page-custom.php template.', 'bonestheme' ); ?></p>
						</footer>
					</article>

			<?php endif; ?>


	</main><!-- /#content -->


<?php get_footer(); ?>

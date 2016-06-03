<?php
/*
 Template Name: Technical Solutions Page

*/
?>

<?php get_header(); ?>

	<main id="content">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>



		<div <?php if(get_field('page_background_image')) { ?>
			style="background-image: url(' <?php the_field('page_background_image') ?>');"
			class="page-header page-header--small page-header--overlay overlay--purple u-flex-v-center"
			<?php }
			else { ?>
				class="page-header page-header--small u-flex-v-center"
			<?php } ?>
			>
			<?php if (get_field('page_title')) { ?>
			<div class="wrapper">
				<h2 class="title u-mb-0"><?php the_field('page_title') ?></h2>
			</div><!-- /container -->
			<?php } ?>

		</div><!-- /page-header -->

		<?php if(get_field(section_title)) { ?>
		<section class="page-intro section--small-padding u-bg-purple ">
			<div class="container u-flex-v-center">
				<h1 class="title u-pull-left u-mb-0"><?php the_field(section_title); ?></h1>
				<div class="u-flex-right"><?php the_field('section_title_svg'); ?></div><!-- /u-pull-right -->
			</div><!-- /container -->
		</section><!--/.page-intro -->
		<?php } ?>

		<section class="section--main">
			<div class="wrapper">
				<div class="section--large-text">
					<?php the_field('section_content') ?>
				</div><!-- /section--large-text -->
					<div class="text-normal">
						<?php the_field('section_small_content') ?>
					</div><!-- /text-bold -->
				<?php if (get_field('section_subtitle') ) {?>
					<h3 class="title"> <?php the_field('section_subtitle'); ?></h3>
				<?php } ?>

				<div class="css-column--two text-normal">
					<?php the_field('section_bullet_points') ?>
				</div><!-- /css-column -->
			</div><!-- /container -->
		</section>



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

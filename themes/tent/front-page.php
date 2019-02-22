<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class="home-hero">

			</section>

			<section class="shop">

			</section>

			<section class="journal">
				<?php
					// Use get_posts to get journal posts
					$args = array( 'post_type' => 'post', 'posts_per_page' => '3' );
					$journal_posts = get_posts( $args );
					if ( ! empty( $news_posts ) ) :   
				?>
						<h2>Inhabitent Journal</h2>
						<ul>
						<?php foreach( $journal_posts as $post) : setup_postdata( $post ); ?>
							<li>
								<?php if (has_post_thumbnail() ) : ?>
									<div class="thumbnail-wrapper">
										<?php the_post_thumbnail('large'); ?>
									</div>
								<?php endif; ?>
								<div class="post-info-wrapper">
									<span class="entry-meta"><?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?></span>
									<h3 class="entry-title"><?php the_title(); ?></h3>
									<a class="black-btn" href="<?php the_permalink(); ?>">Read Entry</a>
								</div>
							</li>
						<?php endforeach; wp_reset_postdata(); ?>
						</ul>
				<?php endif; ?>
			</section>

			<section class="adventures">

			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

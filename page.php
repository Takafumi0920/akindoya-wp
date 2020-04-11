<?php get_header(); ?>

<?php while ( have_posts() ) : ?>

	<?php the_post(); ?>

	<div class="page-body">
		<h1 class="page-title"><?php the_title(); ?></h1>
	
			<article class="page-text">
				<?php the_content(); ?>
			</article>

<!--固定ページでコメントは表示しない。管理画面から固定ページに対してコメントを有効化することは可能。その際には下記の記述が必要-->
		<//?php if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif; ?>

	</div>

<?php endwhile; ?>

<?php get_footer();

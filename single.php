
<!--個別記事の生成-->
<?php get_header(); ?>


<?php while ( have_posts() ) : //投稿ループ開始?>

	<?php the_post(); ?>

		<div class="page-body">
			<article>
				<h1 class="page-title"><?php the_title(); ?></h1>
				<div class="meta-data">
					<div class="clock metanothing">
						<time datetime="<?php echo get_the_date( DATE_W3C ); ?>">
							<span class="clockicon" style="content: url(<?php echo get_template_directory_uri(); ?>/img/clock-o.png");></span>
							<span class="meta-time"><?php echo get_the_date(); ?></span>
						</time>
					</div>
						<!--<p class="meta meta-author"><?php the_author_posts_link(); ?></p>-->
						<p class="meta-category"><?php the_category( ', ' ); ?></p>
						<p class="meta-tag"><?php the_tags(); ?></p>
				</div>

				<div class="page-text">
						<?php the_content(); ?>
				</div>
			</article>
<!--			<div class="pagenav">
					<?php the_post_navigation( array(
						'prev_text' => '前の記事：%title',//%titleで前の記事タイトル表示。前に自由にテキストを記述可
						'next_text' => '次の記事：%title',
					) ); ?>
			</div>
-->
		</div>



<?php endwhile; //get_footerの前?>

<?php get_footer();

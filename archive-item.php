<?php
/*カスタム投稿タイプの「商品一覧」の投稿一覧ページ。とりあえず保留
*/
?>

<?php get_header(); ?>
<div class="post-sidebar">

<div class="post-wrapper">


	<?php
     $loop = new WP_Query(array("post_type" => "team"));
     if ( $loop->have_posts() ) : while($loop->have_posts()): $loop->the_post();
?>
	
	<ul>
		<li>
			<article>
				<div class="item-container">
					<div class="item-photo">
						<img class="" alt="<?php the_title(); ?>" src="<?php the_post_thumbnail(); ?>">
					</div>
					<div class="item-text">
						<h2 class="item-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<h3 class="item-price"></h3>
						<p class="item-sub"></p>
					</div>
				</div>
			</article>
		</li>
		<?php endwhile; ?>
	</ul>
	<?php else : ?>
	
	<p>ただいま準備中です。</p>
	
	<?php endif; ?>
<?php get_sidebar(); ?>
	
</div>
</div>

<?php get_footer();
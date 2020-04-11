<?php
/*
Template Name: item
*/
?>

<?php get_header(); ?>

<?php while ( have_posts() ) : ?>

	<?php the_post(); ?>

<div class="post-sidebar">

<div class="post-wrapper">
	<h1 class="page-title"><?php the_title(); ?></h1>
	<div class="page-text">
	<?php the_content(); ?>
	</div>
	

	
	<ul class="itemcenter">
<!--以下で１ブロックの商品コード。めっちゃ突貫工事-->

		<li>
			<article>
				<div class="item-container">
					<a href="<?php echo esc_url(  get_option( 'item_link1' )); //functions.php内のid=item_link1の于rlを出力?>"></a>
					<div class="item-image">
						
						<img alt="<?php 
									$item_name = get_option( 'item_name1' ); 
									echo esc_html($item_name);
									?>画像 "
							 src="<?php echo esc_url( get_option('item_image1')); ?>">
						
					</div>
					<div class="textcontainer">
						<div class="item-price">
						<?php 
							$item_price = get_option( 'item_price1' ); 
							echo esc_html($item_price);
						?>
						</div>
						<h2 class="item-name">
						<?php 
							$item_name = get_option( 'item_name1' ); 
							echo esc_html($item_name);
						?>
						</h2>
						
					</div>
						<p class="item-sub">※外部サイトに移動します</p>
				
				</div>
			</article>
		</li>
		
		<li>
			<article>
				<div class="item-container">
					<a href="<?php echo esc_url(  get_option( 'item_link2' )); //functions.php内のid=item_link1の于rlを出力?>"></a>
					<div class="item-image">
						
						<img alt="<?php 
									$item_name = get_option( 'item_name2' ); 
									echo esc_html($item_name);
									?>画像 "
							 src="<?php echo esc_url( get_option('item_image2')); ?>">
						
					</div>
					<div class="textcontainer">
						<div class="item-price">
						<?php 
							$item_price = get_option( 'item_price2' ); 
							echo esc_html($item_price);
						?>
						</div>
						<h2 class="item-name">
						<?php 
							$item_name = get_option( 'item_name2' ); 
							echo esc_html($item_name);
						?>
						</h2>
						
					</div>
						<p class="item-sub">※外部サイトに移動します</p>
				
				</div>
			</article>
		</li>
		
		<li>
			<article>
				<div class="item-container">
					<a href="<?php echo esc_url(  get_option( 'item_link3' )); //functions.php内のid=item_link1の于rlを出力?>"></a>
					<div class="item-image">
						
						<img alt="<?php 
									$item_name = get_option( 'item_name3' ); 
									echo esc_html($item_name);
									?>画像 "
							 src="<?php echo esc_url( get_option('item_image3')); ?>">
						
					</div>
					<div class="textcontainer">
						<div class="item-price">
						<?php 
							$item_price = get_option( 'item_price3' ); 
							echo esc_html($item_price);
						?>
						</div>
						<h2 class="item-name">
						<?php 
							$item_name = get_option( 'item_name3' ); 
							echo esc_html($item_name);
						?>
						</h2>
						
					</div>
						<p class="item-sub">※外部サイトに移動します</p>
				
				</div>
			</article>
		</li>
		
		<li>
			<article>
				<div class="item-container">
					<a href="<?php echo esc_url(  get_option( 'item_link4' )); //functions.php内のid=item_link1の于rlを出力?>"></a>
					<div class="item-image">
						
						<img alt="<?php 
									$item_name = get_option( 'item_name4' ); 
									echo esc_html($item_name);
									?>画像 "
							 src="<?php echo esc_url( get_option('item_image4')); ?>">
						
					</div>
					<div class="textcontainer">
						<div class="item-price">
						<?php 
							$item_price = get_option( 'item_price4' ); 
							echo esc_html($item_price);
						?>
						</div>
						<h2 class="item-name">
						<?php 
							$item_name = get_option( 'item_name4' ); 
							echo esc_html($item_name);
						?>
						</h2>
						
					</div>
						<p class="item-sub">※外部サイトに移動します</p>
				
				</div>
			</article>
		</li>
		
		<li>
			<article>
				<div class="item-container">
					<a href="<?php echo esc_url(  get_option( 'item_link5' )); //functions.php内のid=item_link1の于rlを出力?>"></a>
					<div class="item-image">
						
						<img alt="<?php 
									$item_name = get_option( 'item_name5' ); 
									echo esc_html($item_name);
									?>画像 "
							 src="<?php echo esc_url( get_option('item_image5')); ?>">
						
					</div>
					<div class="textcontainer">
						<div class="item-price">
						<?php 
							$item_price = get_option( 'item_price5' ); 
							echo esc_html($item_price);
						?>
						</div>
						<h2 class="item-name">
						<?php 
							$item_name = get_option( 'item_name5' ); 
							echo esc_html($item_name);
						?>
						</h2>
						
					</div>
						<p class="item-sub">※外部サイトに移動します</p>
				
				</div>
			</article>
		</li>
		
		<li>
			<article>
				<div class="item-container">
					<a href="<?php echo esc_url(  get_option( 'item_link6' )); //functions.php内のid=item_link1の于rlを出力?>"></a>
					<div class="item-image">
						
						<img alt="<?php 
									$item_name = get_option( 'item_name6' ); 
									echo esc_html($item_name);
									?>画像 "
							 src="<?php echo esc_url( get_option('item_image6')); ?>">
						
					</div>
					<div class="textcontainer">
						<div class="item-price">
						<?php 
							$item_price = get_option( 'item_price6' ); 
							echo esc_html($item_price);
						?>
						</div>
						<h2 class="item-name">
						<?php 
							$item_name = get_option( 'item_name6' ); 
							echo esc_html($item_name);
						?>
						</h2>
						
					</div>
						<p class="item-sub">※外部サイトに移動します</p>
				
				</div>
			</article>
		</li>
		
		<li>
			<article>
				<div class="item-container">
					<a href="<?php echo esc_url(  get_option( 'item_link7' )); //functions.php内のid=item_link1の于rlを出力?>"></a>
					<div class="item-image">
						
						<img alt="<?php 
									$item_name = get_option( 'item_name7' ); 
									echo esc_html($item_name);
									?>画像 "
							 src="<?php echo esc_url( get_option('item_image7')); ?>">
						
					</div>
					<div class="textcontainer">
						<div class="item-price">
						<?php 
							$item_price = get_option( 'item_price7' ); 
							echo esc_html($item_price);
						?>
						</div>
						<h2 class="item-name">
						<?php 
							$item_name = get_option( 'item_name7' ); 
							echo esc_html($item_name);
						?>
						</h2>
						
					</div>
						<p class="item-sub">※外部サイトに移動します</p>
				
				</div>
			</article>
		</li>
		
		<li>
			<article>
				<div class="item-container">
					<a href="<?php echo esc_url(  get_option( 'item_link8' )); //functions.php内のid=item_link1の于rlを出力?>"></a>
					<div class="item-image">
						
						<img alt="<?php 
									$item_name = get_option( 'item_name8' ); 
									echo esc_html($item_name);
									?>画像 "
							 src="<?php echo esc_url( get_option('item_image8')); ?>">
						
					</div>
					<div class="textcontainer">
						<div class="item-price">
						<?php 
							$item_price = get_option( 'item_price8' ); 
							echo esc_html($item_price);
						?>
						</div>
						<h2 class="item-name">
						<?php 
							$item_name = get_option( 'item_name8' ); 
							echo esc_html($item_name);
						?>
						</h2>
						
					</div>
						<p class="item-sub">※外部サイトに移動します</p>
				
				</div>
			</article>
		</li>
		
	</ul>
	
</div>
<?php endwhile; ?>
	<?php get_sidebar(); ?>
</div>

<?php get_footer();
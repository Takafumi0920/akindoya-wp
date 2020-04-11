<footer>
	<div class="footer-wrapper">
		<div class="footer-info">
			<h2 class="footer-title"><?php bloginfo('name'); ?></h2>
			<h3 class="footer-subtitle"><?php bloginfo('description'); ?></h3>
			<p>〒北海道夕張市清水沢３丁目１３１番地<br><a href="<?php echo esc_url( home_url() ); ?>">yubariakindoya.jp</a>
			</p>	
			<nav class="footer-sns">
				<ul>
					<li><a href="<?php echo esc_url(  get_option( 'twitter_button' )); ?>">
						<span class="fab fa-twitter" title="Twitter"></span></a>
					</li>
					
					<li><a href="<?php echo esc_url(  get_option( 'facebook_button' )); ?>">
						<span class="fab fa-facebook-f" title="Facebook"></span></a>
					</li>
					
					<li><a href="<?php echo esc_url(  get_option( 'instagram_button' )); ?>">
						<span class="fab fa-instagram" title="Instagram"></span></a>
					</li>
				</ul>
			</nav>
		</div>

		<nav class="footer-list">
			<div>
				
				<h3>買う</h3>
				
				<?php wp_nav_menu( array(
				'theme_location'		=>'footer-left')); //footer-leftのロケーションを指定?>
				
			</div>
			
			<div>
				<h3>知る</h3>
				
				<?php wp_nav_menu( array(
				'theme_location'		=>'footer-center')); ?>
			</div>
			
			<div>
				<h3>ヘルプ</h3>
				<?php wp_nav_menu( array(
				'theme_location'		=>'footer-right')); ?>
			</div>
		</nav>
		<div class="footer-copyright">
		©️YubariAkindoya corp. All rights reserved.
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>

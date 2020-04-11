<?php get_header(); ?>
<div class="hero">
	<section>
		<img class="hero-image"　alt="" src="<?php echo get_template_directory_uri(); ?>/img/melon-cutout.png">
		<div class="hero-textwrap">
			<h1 class="hero-text">夕張を、<br>ほおばろう。</h1>
			<p class="hero-subtext">ベテラン店長が市場で直接仕入れる八百屋</p>
		</div>
	</section>
	
	<aside id="button-nav" class="button-nav">
		
		<div class="circle-button">
			<a href="<?php echo esc_url(  get_option( 'responsivebutton_section1' )); ?>"></a>
				<img class="shopping-cart" alt="" src="<?php echo get_template_directory_uri(); ?>/img/shopping-cart.png">
			
		</div>
		
		<div class="circle-button">
			<a href="<?php
				 $page_id = get_option( 'responsivebutton_section2' ); 
				 echo esc_url(get_permalink($page_id)); //固定ページIDからURL取得
   			?>"></a>
				<img class="melon-color" alt="" src="<?php echo get_template_directory_uri(); ?>/img/melon-color.png">
		</div>
		<div class="circle-button">
			<a href="<?php
				 $page_id = get_option( 'responsivebutton_section3' ); 
				 echo esc_url(get_permalink($page_id)); //固定ページIDからURL取得
   			?>"></a>
				<img class="question" alt="" src="<?php echo get_template_directory_uri(); ?>/img/question.png">
			
		</div>
	</aside>
</div>
	
<section class="column">
	<div id="column1" class="ak-photo"></div>
		<div class="column1 textwrap">
			<h1 class="column-text">特大じゃがバター</h1>
			<p class="column-subtext">未だかつて無い大きさがここに。<br>あきんど屋では、特大サイズの北海道産キタアカリを使用。甘くホクホクになるまで蒸して、たっぷりの北海道バターを投入。まずは塩をかけてシンプルに。物足らない欲張りさんには、とっておきのトッピングをご用意！あきんど屋のじゃがバターは、<a class="column-link" href="<?php
				 $page_id = get_option( 'homebutton_section2' ); 
				 echo esc_url(get_permalink($page_id)); //固定ページIDからURL取得
				?>">全国のイベント</a>にてご提供しています。</p>
		</div>
</section>
	
<section class="column flexdirection-reverse">
	<div id="column2" class="ak-photoreverse ak-photo"></div>
	<div class="column2 textwrap">
		<h1 class="column-text">名物メロンソフト</h1>
		<p class="column-subtext">夕張メロンに北海道産ミルクを使ったソフトクリームをのせたらどうなるのか？<br>
北海道までの旅費を無駄にさせない、最高のスイーツができあがりました。夕張本店より期間限定でご用意しております。たま〜に出張販売もしておりますので、どうしても東京で味わいたい方は、画面に張り付いて<a class="column-link" href="<?php
				 $page_id = get_option( 'responsivebutton_section2' ); 
				 echo esc_url(get_permalink($page_id)); //固定ページIDからURL取得
	?>">最新情報</a>をご覧ください。</p>
	</div>
</section>


<section id="column3" class="column3">
	<div class="button-container no-bordertop">
		<div class="contents-circle-button"> 
			<img class="contents-shopping-cart" alt="" src="<?php echo get_template_directory_uri(); ?>/img/shopping-cart.png">
		</div>
		<h2 class="contents-button-txt">オンラインストア</h2>
		<a class="contents-button" href="<?php echo esc_url( get_option( 'homebutton_section1' )); ?>">商品を見る</a>
	</div>
	<div class="button-container">
		<div class="contents-circle-button">
			<img class="information" alt="" src="<?php echo get_template_directory_uri(); ?>/img/information.png">
		</div>
		
		<h2 class="contents-button-txt">あきんど屋出店情報</h2>
		<a class="contents-button" href="<?php
				 $page_id = get_option( 'homebutton_section2' ); 
				 echo esc_url(get_permalink($page_id)); //固定ページIDからURL取得
   			?>">詳しく見る</a>
	</div>
	<div class="button-container">
		<div class="contents-circle-button">
			<img class="contents-question" alt="" src="<?php echo get_template_directory_uri(); ?>/img/question.png">
		</div>
		<h2 class="contents-button-txt">お問い合わせ</h2>
		<a class="contents-button" href="<?php
				 $page_id = get_option( 'homebutton_section3' ); 
				 echo esc_url(get_permalink($page_id)); //固定ページIDからURL取得
   			?>">詳しく見る</a>
	</div>
</section>
<?php get_footer(); ?>
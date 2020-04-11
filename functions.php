<?php 
function akindoyawp_scripts() {
	//ここに関数の中身を記述
	wp_enqueue_style( 'akindoyawp-style' , get_stylesheet_uri() );
	wp_enqueue_style( 'akindoyawp-style' , get_template_directory_uri() . '/css/menu-jquery.css');
	wp_enqueue_style( 'akindoyawp-style' , get_template_directory_uri() . '/css/searchform.css');
	wp_enqueue_style( 'akindoyawp-style' , get_template_directory_uri() . '/css/contactform7.css');
	wp_enqueue_style( 'akindoyawp-style' , get_template_directory_uri() . '/css/sidebar.css');
}

add_action( 'wp_enqueue_scripts' , 'akindoyawp_scripts' );

function akindoyawp_setup() {
	add_theme_support( 'title-tag' );
	
	add_theme_support( 'post-thumbnails' );
	
	add_image_size( 'akindoyawp-thumbnail');//テーマサムネ呼び出し
	
	add_image_size( 'akindoyawp-hero',1200,630,true );//トップ画像サイズ設定
	
	add_theme_support('menus');//フッター用カスタムメニュー実装
	
//カスタムメニュー登録
	register_nav_menus( array(
		'global' => 'トップページナビ',
	));
	
}

add_action( 'after_setup_theme' , 'akindoyawp_setup' );


//サイドバー追加
function akindoyawp_widgets_init() {
	register_sidebar( array(
		'name'	=>	'サイドバー',
		'id'	=>	'sidebar',
	));
}
add_action( 'widgets_init','akindoyawp_widgets_init');

//管理画面メニューからliタグクラスを入力し、aタグのクラスとして付与する。出典：https://blog.simmon.design/add-any-classes-to-custom-menu-link-in-wordpress/
add_filter( 'walker_nav_menu_start_el', function( $item_output, $item ) {

    $link_classes = '';
    // カスタムメニューのリストに付いているクラスはデフォルトでmenu-itemとcurrent-という文字が含まれているので、
    // それが含まれていないクラス（フォームから追加したクラス）を取得し、link_classesに格納。
    foreach( $item->classes as $class ) {
        if ( false === strpos( $class, 'menu-item' ) && false === strpos( $class, 'current-' ) && '' !== $class ) {
            $link_classes .= $class . ' ';
        }
    }

    // フォームから取得したクラス達（$link_classes）をaタグに追加してreturn。
    if ( '' !== $link_classes ) {
        return str_replace( 'href',  'class="' . $link_classes . '" href', $item_output );
    } else {
        return $item_output;
    }

}, 10, 2 );

// このままだとリストにも同じクラスが付いたままになるので
// menu-itemとcurrent-の文字を含まないクラス（フォームから追加したクラス）をリストから削除します。
add_filter( 'nav_menu_css_class', function( $classes, $item ) {

    foreach( $classes as $i => $class ) {
        if ( false === strpos( $class, 'menu-item' ) && false === strpos( $class, 'current-' ) && '' !== $class ) {
            unset( $classes[$i] );
        }
    }

    return $classes;

}, 10, 2 );

//ヘッダーナビに検索フォームを挿入

add_filter('wp_nav_menu_items','add_search_box', 10, 2);
function add_search_box($items, $args) {
 ob_start();
 get_search_form();
 $searchform = ob_get_contents();
 ob_end_clean();
  $items .= '

' . $searchform . '


';
 return $items;
}


/*テーマカスタマイザー：実装*/

function akindoyawp_customize_register( $wp_customize ) {
	//ここでパネル、セクション、コントロール、セッティングを追加
//商品セクションの追加
	$wp_customize->add_section( 'item_section', array(
		'title'		=>'商品一覧設定',
		'priority'	=>0,
		'description'=>'商品一覧の編集ができます',
	));
	

for($i = 1; $i <= 8; $i++ ) {
//商品コントロール追加
 $wp_customize->add_setting('item_image' .$i, array(
    'type' => 'option',
  ));

if(class_exists('WP_Customize_Image_Control')):
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'item_image' .$i, array(
    'settings' => 'item_image' .$i,
    'label' => '商品画像' .$i,
    'section' => 'item_section',
  )));

endif;
	
//商品コントロール追加：商品名
	
	$wp_customize->add_setting( 'item_name' .$i, array(
		'type'		=>  'option',
	));
	$wp_customize->add_control( 'item_name' .$i, array(
		'label' => '商品名' .$i,
		'section' => 'item_section', 
		'settings' => 'item_name' .$i, 
		'type' => 'text',
		'description' => '商品名を設定できます', 
		'allow_addition' => true,
	));

//商品コントロール追加：商品リンク
	
	$wp_customize->add_setting( 'item_link' .$i, array(
		'type'		=>  'option',
	));
	$wp_customize->add_control( 'item_link' .$i, array(
		'label' => '商品リンク' .$i,
		'section' => 'item_section', 
		'settings' => 'item_link' .$i, 
		'type' => 'url',
		'description' => '外部の商品ページへリンク設定ができます', 
		'allow_addition' => true,
	));
//商品コントロール追加：商品価格
	$wp_customize->add_setting( 'item_price' .$i, array(
		'type'		=>  'option',
	));
	$wp_customize->add_control( 'item_price' .$i, array(
		'label' => '商品価格' .$i,
		'section' => 'item_section', 
		'settings' => 'item_price' .$i, 
		'type' => 'text',
		'description' => '商品の価格を指定できます', 
		'allow_addition' => true,
	));
}
	
//トップページコラムの画像設定
	
$wp_customize->add_section( 'topimage_section', array(
		'title'		=>'トップコラム画像設定',
		'priority'	=>1,
		'description'=>'トップページコラムの画像設定ができます（上から順番）',
	));
	

for($i = 1; $i <= 2; $i++ ) {
//商品コントロール追加
 $wp_customize->add_setting('topimage_section' .$i, array(
    'type' => 'option',
  ));

if(class_exists('WP_Customize_Image_Control')):
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'topimage_section' .$i, array(
    'settings' => 'topimage_section' .$i,
    'label' => 'トップページコラム画像' .$i,
    'section' => 'topimage_section',
  )));
	
endif;
}
	
//トップページボタン設定セクション追加
	
$wp_customize->add_section( 'homebutton_section', array(
		'title'		=>'トップページボタン設定',
		'priority'	=>2,
		'description'=>'トップページのボタンで遷移できるURLを設定できます（上もしくは左から順）',
	));
	
	$wp_customize->add_setting( 'homebutton_section1' , array(
		'type'	=> 'option',
	));

	$wp_customize->add_control( 'homebutton_section1', array(
		'label' => 'オンラインストア',
		'section' => 'homebutton_section', 
		'settings' => 'homebutton_section1' , 
		'type' => 'url',
		'description' => "オンラインストアへのリンクを入力", 
	));
	
for($i = 2; $i <= 3; $i++ ) {
	$wp_customize->add_setting( 'homebutton_section' .$i , array(
		'type'	=> 'option',
	));

	$wp_customize->add_control( 'homebutton' .$i, array(
		'label' => 'ホームボタン' .$i,
		'section' => 'homebutton_section', 
		'settings' => 'homebutton_section' .$i , 
		'type' => 'dropdown-pages',
		'description' => "トップページの $i つ目のボタン", 
	));
	
}
	
//レスポンシブボタン設定セクション追加
	
$wp_customize->add_section( 'responsivebutton_section', array(
		'title'		=>'レスポンシブボタン設定',
		'priority'	=>3,
		'description'=>'トップページがレスポンシブ時に現れるボタンに、遷移できるURLを設定できます（上から順）',
	));
	
	$wp_customize->add_setting( 'responsivebutton_section1' , array(
		'type'	=> 'option',
	));
	

	$wp_customize->add_control( 'responsivebutton1', array(
		'label' => 'オンラインストア',
		'section' => 'responsivebutton_section', 
		'settings' => 'responsivebutton_section1', 
		'type' => 'url',
		'description' => "オンラインストアへのリンクを入力", 
	));

for($i = 2; $i <= 3; $i++ ) {	
	$wp_customize->add_setting( 'responsivebutton_section' .$i , array(
		'type'	=> 'option',
	));
	

	$wp_customize->add_control( 'responsivebutton' .$i, array(
		'label' => 'レスポンシブボタン' .$i,
		'section' => 'responsivebutton_section', 
		'settings' => 'responsivebutton_section' .$i, 
		'type' => 'dropdown-pages',
		'description' => "レスポンス時の $i つ目のボタン", 
	));
	
}
//snsセクション追加
	
$wp_customize->add_section( 'sns_section', array(
		'title'		=>'SNSリンク設定',
		'priority'	=>4,
		'description'=>'SNSボタンへのリンクが編集ができます',
	));
	
//コントロール追加：SNSボタン
	$wp_customize->add_setting( 'twitter_button', array(
		'type'	=> 'option',
	));
	$wp_customize->add_control( 'twitter_button', array(
		'label' => 'Twitter',
		'section' => 'sns_section', 
		'settings' => 'twitter_button' , 
		'type' => 'url',
		'description' => 'TwitterアカウントのURLを貼り付けると、フッターのTwitterボタンとリンクします', 
	));
	
	$wp_customize->add_setting( 'facebook_button', array(
		'type'	=> 'option',
	));
	$wp_customize->add_control( 'facebook_button', array(
		'label' => 'Facebook',
		'section' => 'sns_section', 
		'settings' => 'facebook_button' , 
		'type' => 'url',
		'description' => 'FacebookアカウントのURLを貼り付けると、フッターのFacebookボタンとリンクします', 
	));
	
	$wp_customize->add_setting( 'instagram_button', array(
		'type'	=> 'option',
	));
	$wp_customize->add_control( 'instagram_button', array(
		'label' => 'Instagram',
		'section' => 'sns_section', 
		'settings' => 'instagram_button' , 
		'type' => 'url',
		'description' => 'InstagramアカウントのURLを貼り付けると、フッターのInstagramボタンとリンクします', 
	));
	
	$wp_customize->add_setting( 'youtube_button', array(
		'type'	=> 'option',
	));
	$wp_customize->add_control( 'youtube_button', array(
		'label' => 'YouTube',
		'section' => 'sns_section', 
		'settings' => 'youtube_button' , 
		'type' => 'url',
		'description' => 'YouTubeアカウントのURLを貼り付けると、フッターのYouTubeボタンとリンクします', 
	));
}

//アクションフックに登録
add_action( 'customize_register' , 'akindoyawp_customize_register' );

/*footer*/

register_nav_menu('footer-left','フッター買う');
register_nav_menu('footer-center','フッター知る');
register_nav_menu('footer-right','フッターヘルプ');



<?php

if ( ! function_exists( 'lab_setup' ) ) :

function lab_setup() {
	/*
	 * 自動フィードリンク
	 */
	add_theme_support( 'automatic-feed-links' );
	
	/*
	 * titleを自動で書き出し
	 */
//	add_theme_support( 'title-tag' );
	
	/*
	 * アイキャッチ画像を設定できるようにする
	 */
	add_theme_support( 'post-thumbnails', array( 'post','menu' ) );
	
	/*
	 * 検索フォーム、コメントフォーム、コメントリスト、ギャラリー、キャプションでHTML5マークアップの使用を許可します
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
	
	/*
	 * テーマカスタマイザーにおける編集ショートカット機能の使用
	 */
	add_theme_support( 'customize-selective-refresh-widgets' );
	
	/*
	 * カスタムメニュー位置を定義
	 * 参照：
	 */
	register_nav_menus( array(
		'global' => 'グローバルナビ',
	) );
	
}
endif;
add_action( 'after_setup_theme', 'lab_setup' );

/*
* スクリプトを読み込み
*/
// JS・CSSファイルを読み込む
function link_files() {
    if( !is_admin() ){
	// WordPress提供のjquery.jsを読み込まない
	wp_deregister_script('jquery');
	// jQueryの読み込み
	wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', "", "0.1", false );
    }
    	// JSファイルの読み込み
    	wp_enqueue_script( 'script_main', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), '0.1', true );
    //スライダー用JSファイルの読み込み
    wp_enqueue_script( 'script_slider', get_template_directory_uri() . '/js/slick.min.js', array( 'jquery' ), '0.1', true );
    // CSSファイルの読み込み
    wp_enqueue_style( 'style_reset', get_template_directory_uri().'/css/reset.css', array(), '0.1' );
    wp_enqueue_style( 'style_main', get_template_directory_uri().'/css/style.css', array(), '0.1' );
    //スライダー用CSSファイルの読み込み
    wp_enqueue_style( 'style_slider', get_template_directory_uri().'/css/slick.css', array(), '0.1' );
}

add_action('wp_enqueue_scripts', 'link_files');


//記事の表示件数をページ毎に変更
  function myPreGetPosts( $query ) {
      if ( is_admin() || ! $query->is_main_query() ){
          return;
      }
      if ( $query->is_front_page() ) {
         $query->set('posts_per_page', 10);
      }
      if ( $query->is_archive() ) {
         $query->set('posts_per_page', 10);
      }
   }
   add_action('pre_get_posts','myPreGetPosts');


// 記事の自動整形を無効化
remove_filter('the_content', 'wpautop');
remove_filter( 'the_content', 'wptexturize' );
// 抜粋の自動整形を無効化
remove_filter('the_excerpt', 'wpautop');

//固定ページの画像を相対パスで
function imagepassshort($arg) {
$content = str_replace('"img/', '"' . get_stylesheet_directory_uri() . '/img/', $arg);
return $content;
}
add_action('the_content', 'imagepassshort');

//add SVG to allowed file uploads
function add_file_types_to_uploads($file_types){

    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes );

    return $file_types;
}
add_action('upload_mimes', 'add_file_types_to_uploads');

// Contact Form 7 にショートコードを追加
function get_mytheme_url() {
    return get_template_directory_uri();
}
wpcf7_add_shortcode('show_mytheme_url', 'get_mytheme_url', true);

?>
<?php
/**
 * テーマのセットアップ
 */
function vlog_theme_setup() {
  // タイトルタグ（<title>）の出力.
  add_theme_support( 'title-tag' );
  add_theme_support( 'post-thumbnails' );
  add_image_size( 'page_eyecatch', 1100, 610, true );
  add_image_size( 'archive_thumbnail', 432, 332, true );
  add_image_size('music-list', 640, 396, true);
  // add_image_size('new-articles', 150, 112, true);


  add_theme_support('wp-block-style');
}
//テーマが呼び出された後に、yukuryのテーマをセットアップする.
add_action( 'after_setup_theme', 'vlog_theme_setup' );


function vlog_enqueue_scripts(){


if (is_front_page()){
        // $scriptPath = '/js/entry.min.js';
    }

    // wp_enqueue_script(
    //     'custom_script',
    //     get_template_directory_uri() . $scriptPath,
    //     '',
    //     date("His"),
    //     true
    // );

  wp_enqueue_script(
    '',
    get_template_directory_uri() . '/js/common.js',
    array(),
    '1.0.0',
    //trueを設定すると、wp_footerに出力。初期値はwp_header。
    true
  );


  wp_enqueue_style(
    '',
    get_template_directory_uri() . '/css/style.css',
    array(),
  );
}
add_action( 'wp_enqueue_scripts', 'vlog_enqueue_scripts' );

function vlog_remove_block_patterns(){
  remove_theme_support( 'core-block-patterns' );
}
add_action('after_setup_theme', 'vlog_remove_block_patterns');


function suound_register_block_patterns(){

  register_block_pattern(
    'vloglog/text01',
    array(
      'title' => 'テキストスタイル01',
      'categories' => array('text'),
      'discription' => 'テキストスタイル01',
      'content' => "<div class=\"detain-innerbox\">\n <h1 class=\"box-tit01\">\n  タイトルタグ０１</h1>\n <p class=\"txt\">textテキスト</p>\n </div>",
    )
  );
  register_block_pattern(
    'vloglog/text02',
    array(
      'title' => 'テキストスタイル02',
      'categories' => array('text'),
      'discription' => 'テキストスタイル02',
      'content' => "<div class=\"detain-innerbox\">\n <h2 class=\"box-tit02\">\n  タイトルタグ０２</h2>\n <p class=\"txt\">textテキストアイウエ</p>\n </div>",
    )
  );
  register_block_pattern(
    'vloglog/text03',
    array(
      'title' => 'テキストスタイル03',
      'categories' => array('text'),
      'discription' => 'テキストスタイル03',
      'content' => "<div class=\"detain-innerbox\">\n <h3 class=\"box-tit03\">\n  タイトルタグ０３</h3>\n <p class=\"txt\">textテキストアイウエ</p>\n </div>",
    )
  );
}
add_action( 'init', 'suound_register_block_patterns' );



function yukury_block_setup(){
  add_theme_support('wp-block-style');
  add_theme_support(
    'editor-font-size',
    array(
      array(
        'name' => 'キャプション',
        'size' => '',
        'slug' => '',
      )
    ),
  );
}
add_action('after_setuptheme','yukury_block_setup');



// パンくずリスト
function breadcrumb() {
  $home = '<li><a href="'.get_bloginfo('url').'">HOME</a></li>';
  $arch = '<li><a href="'.get_bloginfo('url').'/list">記事一覧</a></li>';
  $archiv = '<li>記事一覧</li>';
  echo '<ul class="breadcrumb">';

  // トップページの場合
  if ( is_front_page() ) {

}else if ( is_category() ) {
        // カテゴリページの場合
        $cat = get_queried_object();
        $cat_id = $cat->parent;
        $cat_list = array();
        while ($cat_id != 0){
            $cat = get_category( $cat_id );
            $cat_link = get_category_link( $cat_id );
            array_unshift( $cat_list, '<li><a href="'.$cat_link.'">'.$cat->name.'</a></li>' );
            $cat_id = $cat->parent;
        }
        echo $home;
        foreach($cat_list as $value){
            echo $value;
        }
        the_archive_title('<li>', '</li>');



  // アーカイブページの場合
  } else if ( is_archive() ) {
  echo $home;
  echo $archiv;



  

  // 投稿ページの場合
  } else if ( is_single() ) {
    echo $home;
  $cat = get_the_category();
    if( isset($cat[0]->cat_ID) ) $cat_id = $cat[0]->cat_ID;
    $cat_list = array();
    while ($cat_id != 0){
        $cat = get_category( $cat_id );
        $cat_link = get_category_link( $cat_id );
        array_unshift( $cat_list, '<li><a href="'.$cat_link.'">'.$cat->name.'</a></li>' );
        $cat_id = $cat->parent;
    }
    foreach($cat_list as $value){
        echo $value;
    }
    
    the_title('<li>', '</li>');


  // 固定ページの場合
  } else if ( is_page() ) {
  echo $home;
  the_title('<li>', '</li>');

  // 検索結果の場合
  } else if ( is_search() ) {
  echo $home;
  echo '<li>「'.get_search_query().'」の検索結果</li>';

  // 404ページの場合
  } else if ( is_404() ) {
  echo $home;
  echo '<li>ページが見つかりません</li>';
  }
  echo '</ul>';


}





add_filter( 'get_the_archive_title', function ($title) {
    if ( is_category() ) {
        $title = single_cat_title( '', false );
    } elseif ( is_tag() ) {
        $title = single_tag_title( '', false );
    } elseif ( is_month() ) {
        $title = single_month_title( '', false );
    }
    return $title;
});


/*【出力カスタマイズ】検索対象をカスタム投稿タイプで絞り込む */
function my_pre_get_posts($query) {
  if ( !is_admin() && $query->is_main_query() && $query->is_search() ) {
    $query->set( 'post_type', array('post','page','blog') );
  }
}
add_action( 'pre_get_posts','my_pre_get_posts' );



//カスタム投稿日本語
add_action( 'init', 'create_post_type_carlease' );
function create_post_type_carlease() {
  register_post_type( 'carlease', // post-type
    array(
      'labels' => array(
      'name' => __( 'カーリース' ),
      'add_new' => _x('新規追加', 'carlease'),
      'add_new_item' => __('carleaseを追加'),
      'singular_name' => __( 'carlease' )
      ),
      'public' => true,
      'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields' ,'comments' ),
      'menu_position' =>200,
      'show_in_rest' => true,
      'has_archive' => true,
      'with_front' => true,
      // 'rewrite' => array( 'with_front' => false ),
      // 'rest_base' => 'carlease',
    )
  );       
}






// contact formメールアドレス一致確認
add_filter( 'wpcf7_validate_email', 'wpcf7_validate_email_filter_extend', 11, 2 );
add_filter( 'wpcf7_validate_email*', 'wpcf7_validate_email_filter_extend', 11, 2 );
function wpcf7_validate_email_filter_extend( $result, $tag ) {
    $type = $tag['type'];
    $name = $tag['name'];
    $_POST[$name] = trim( strtr( (string) $_POST[$name], "n", " " ) );
    if ( 'email' == $type || 'email*' == $type ) {
        if (preg_match('/(.*)_confirm$/', $name, $matches)){ //確認用メルアド入力フォーム名を ○○○_confirm としています。
            $target_name = $matches[1];
            if ($_POST[$name] != $_POST[$target_name]) {
                if (method_exists($result, 'invalidate')) {
                    $result->invalidate( $tag,"確認用のメールアドレスが一致していません");
                } else {
                    $result['valid'] = false;
                    $result['reason'][$name] = '確認用のメールアドレスが一致していません';
                }
            }
        }
    }
    return $result;
}




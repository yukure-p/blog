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
    } else if( is_single(63) ){
      // $scriptPath = '/js/fixed.js';
      wp_enqueue_script(
          'custom_script',
          get_template_directory_uri() . '/js/fixed.js',
          '',
          date("His"),
          true
      );
      
    }



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
  $top = esc_url (home_url());
  $home = '<li><a href="'.esc_url (home_url()).'">HOME</a></li>';
  $archiv = '<li>記事一覧</li>';
  $post_label = '<li>'.esc_html(get_post_type_object(get_post_type())->label).'</li>';
  $post_label_name = esc_html(get_post_type_object(get_post_type())->label); 
    if($post_label_name=='カーリース'){
    $my_post_url = 'car_lease';
    } else if ($post_label_name=='ショップカートASP'){
    $my_post_url = 'asp_cart';
    }
  $post_url = '<li><a href="'.esc_url (home_url($my_post_url)).'">'.$post_label_name.'</a></li>'; 
  // $post_name =  '<li>'.esc_html(get_the_title($post->ID)).'</li>';
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
  echo $post_label;



  

  // 投稿ページの場合
  } else if( is_singular() ) {
  if ( is_single() ) {
    echo $home;
    echo $post_url;
    
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




//カスタム投稿車
add_action( 'init', 'create_post_type_car_lease' );
function create_post_type_car_lease() {
  register_post_type( 'car_lease', // post-type
    array(
      'labels' => array(
      'name' => __( 'カーリース' ),
      'add_new' => _x('新規追加', 'カーリース'),
      'add_new_item' => __('カーリースを追加'),
      'singular_name' => __( 'car_lease' )
      ),
      'public' => true,
      'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields' ,'comments' ),
      'menu_position' =>200,
      'show_in_rest' => true,
      'has_archive' => true,
      'with_front' => true,
      // 'rewrite' => array( 'with_front' => false ),
      // 'rest_base' => 'car_lease',
    )
  );
  //カスタムタクソノミー、カテゴリタイプ*
  register_taxonomy(
    'car_cat',
    'car_lease',
    array(
      'hierarchical' => true,
      'update_count_callback' => '_update_post_term_count',
      'label' => 'カテゴリ',
      'singular_label' => 'カテゴリ',
      'public' => true,
      'show_ui' => true,
      'show_admin_column' => true,
      // 'rewrite' => false,
      // 'rewrite' => array( 'slug' => 'car_lease' ), //変更後のスラッグ
    )
  );         
}


//カスタム投稿ASP
add_action( 'init', 'create_post_type_asp_cart' );
function create_post_type_asp_cart() {
  register_post_type( 'asp_cart', // post-type
    array(
      'labels' => array(
      'name' => __( 'ショップカートASP' ),
      'add_new' => _x('新規追加', 'ショップカートASP'),
      'add_new_item' => __('ショップカートASPを追加'),
      'singular_name' => __( 'asp_cart' )
      ),
      'public' => true,
      'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields' ,'comments' ),
      'menu_position' =>200,
      'show_in_rest' => true,
      'has_archive' => true,
      'with_front' => true,
      // 'rewrite' => array( 'with_front' => false ),
      // 'rest_base' => 'asp_cart',
    )
  );
  //カスタムタクソノミー、カテゴリタイプ*
  register_taxonomy(
    'asp_cat',
    'asp_cart',
    array(
      'hierarchical' => true,
      'update_count_callback' => '_update_post_term_count',
      'label' => 'カテゴリ',
      'singular_label' => 'カテゴリ',
      'public' => true,
      'show_ui' => true,
      'show_admin_column' => true,
      // 'rewrite' => false,
      // 'rewrite' => array( 'slug' => 'car_lease' ), //変更後のスラッグ
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



// function sample_function(){
// if (!check_ajax_referer( 'my_nonce' )){
// wp_die();
// }
//   $car_lease = $_POST['car_lease'];
//   $asp_cart = $_POST['asp_cart'];

//     die();

// }
// // //ログインしているユーザー向け関数
// add_action( 'wp_ajax_sample_function', 'ajax_func' );
// //非ログインユーザー用関数
// add_action( 'wp_ajax_nopriv_sample_function', 'ajax_func' );

// function my_ajax_search(){
//     // 「ad_url.ajax_url」のようにしてURLを指定できるようになる

//   wp_enqueue_script(
//    'script-ajax', 
//    get_template_directory_uri().'/js/async.js', 
//    array(), 
//    null, 
//    true );

//     wp_localize_script( 'script-ajax', 'async',array( 
//       'url' => admin_url( 'admin-ajax.php')
//       ));
// }
// add_action( 'wp_enqueue_scripts', 'my_ajax_search' );


// URL変更
function car_lease_post_type_link( $link, $post ){
  if ( $post->post_type === 'car_lease' ) {
    return home_url( '/car_lease/' . $post->ID );
  } else {
    return $link;
  }
}
add_filter( 'post_type_link', 'car_lease_post_type_link', 1, 2 );

function car_lease_rewrite_rules_array( $rules ) {
  $new_rewrite_rules = array( 
    'car_lease/([0-9]+)/?$' => 'index.php?post_type=car_lease&p=$matches[1]',
  );
  return $new_rewrite_rules + $rules;
}
add_filter( 'rewrite_rules_array', 'car_lease_rewrite_rules_array' );



function asp_cart_post_type_link( $link, $post ){
  if ( $post->post_type === 'asp_cart' ) {
    return home_url( '/asp_cart/' . $post->ID );
  } else {
    return $link;
  }
}
add_filter( 'post_type_link', 'asp_cart_post_type_link', 1, 2 );

function asp_cart_rewrite_rules_array( $rules ) {
  $new_rewrite_rules = array( 
    'asp_cart/([0-9]+)/?$' => 'index.php?post_type=asp_cart&p=$matches[1]',
  );
  return $new_rewrite_rules + $rules;
}
add_filter( 'rewrite_rules_array', 'asp_cart_rewrite_rules_array' );




// 検索フォーム複数設置用
// add_filter('template_include','custom_search_template');
// function custom_search_template($template){
//    if ( is_search() ){
//       $post_types = get_query_var('post_type');
//       foreach ( (array) $post_types as $post_type )
//       if( $post_types == 'car_lease' ) {
//       $templates[] = "search-car_lease.php";
//     }else if ($post_types == 'asp_cart'){
//       $templates[] = "search-asp_cart.php";
//     }else{
//       $templates[] = 'search.php';
//     }
      
      
//       $template = get_query_template('search',$templates);
//    }
//     return $template;
// }

// add_filter( 'template_include', 'my_search_template' );
// function my_search_template( $template ) {
//     $type = filter_input( INPUT_GET, 'post_type' );
//     $new_template = '';
//      $post_types = get_query_var('post_type');
//      // echo $post_types;
//     if( $type == $post_types ) {
//       $new_template = STTYLESHEETPATH. '/search-car_lease.php';
//         // switch ( $type ) {
//         //     case 'car_lease':
//         //         $new_template = STTYLESHEETPATH. '/search-car_lease.php';
//         //         break;
//         //     case 'taxonomy':
//         //         $new_template = '';
//         //         break;
//         //     default:
//         //        $new_template = '';
//         // }
//    }
   
//    if( $new_template ) {
//        if( file_exists( $new_template ) ) {
//           return $new_template;
//        }
//    }

//    return $template;
// }





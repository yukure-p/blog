<?php get_header(); ?>
<main>
  <div class="l-frame">

    <div class="l-container">
      <section>
        <div class="l-contents">

          <ul class="contents-list l-gid">
            <?php
            // 取得したい内容を配列に記載します（不要箇所は省略可）
            $args = array(
               'posts_per_page'   => -1, // 読み込みしたい記事数（全件取得時は-1）
               'category__in' => array(3, 4),  // 読み込みしたいカテゴリID（複数の場合は '1,2'）
               'orderby'          => 'ID', // 何順で記事を読み込むか（省略時は日付順）
               'order'            => 'DESC', // 昇順(ASC)か降順か(DESC）
               'exclude'          => '111, 125', // 一覧に表示したくない記事のID（複数時は,区切）
            );

            // 配列で指定した内容で、記事情報を取得
            $the_query = new WP_Query( $args );

            // 取得した記事情報の表示
            if ( $the_query->have_posts() ): // 記事情報がある場合はforeachで記事情報を表示

            // ↓ ループ開始 ↓
            while ( $the_query->have_posts() ):
               $the_query->the_post(); // アーカイブページ同様にthe_titleなどで記事情報を表示できるようにする
            ?>

               <li class="box-content">
                  <div class="box-item">
                     <figure class="box-img">
                        <a href="<?php echo get_permalink($post->ID); ?>" class="linkBl01">
                       <?php
                        // アイキャッチ画像を取得
                        $thumbnail_id = get_post_thumbnail_id($post->ID);
                        $thumb_url = wp_get_attachment_image_src($thumbnail_id, 'small');
                        if (get_post_thumbnail_id($post->ID)) {
                          echo '<figure><img src="' . $thumb_url[0] . '" alt=""></figure>';
                        } else {
                          // アイキャッチ画像が登録されていなかったときの画像
                          echo '<figure><img src="' . get_template_directory_uri() . '/img/img-default.png" alt=""></figure>';
                        }
                        ?>
                        </a>
                     </figure>
                     <div class="box-info">
                     <div class="date">
                        <time datetime=""><?php the_time('Y.m.d') ?></time>
                     </div>
                     <div class="box-txt">
                        <h1 class="box-tit">
                        <a href="<?php echo get_permalink($post->ID); ?>" class="link03"><?php echo get_the_title($post->ID); ?></a>
                        </h1>
                        <!-- <?php
                          $terms = get_the_terms($post->ID, 'before');
                          if($terms):
                            echo '<ul class="type-tag" arial-label="タグ">';
                            foreach($terms as $term):
                              $term_name = $term->name;
                              $term_link = get_term_link( $term );
                              echo '<li><a href="'.$term_link.'" class="link02">'.$term_name.'</a></li>';
                            endforeach;
                            echo '</ul>';
                          endif;
                        ?> -->
                     </div>
                     </div>
                  </div>
               </li>
              
                <?php endwhile;
                endif;
                wp_reset_postdata();
                ?>
                
          </ul>
        </div>
      </section>




   <aside>
      <div class="l-aside">
      <h1 class="aside-tit">Categories</h1>
         <div class="l-aside-inner">
           <ul class="l-aside-menu index" id="indexList">
             <li><a href="#index1" class="link01">カーリース比較</a></li>
             <li><a href="#index4" class="link01">ASPカート比較</a></li>
           </ul>
         </div>
      </div>
   </aside>

   
   </div>
  </div>
  <!-- /.l-frame -->
</main>
<?php get_footer(); ?>


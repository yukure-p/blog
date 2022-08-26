<?php get_header(); ?>
<main>
  <div class="l-frame">





<?php
/**
 * Template Name: 絞り込みasp
 * Template Post Type: asp_cart
 */

?>





    <div class="l-entry">
      <?php breadcrumb(); ?>
      <section>
        <div class="entry-box">
          <h1 class="tit-01"><span>ASP記事一覧</span></h1>
        </div>
      </section>
    </div>
    <!-- /.l-entry -->

    <div class="l-container">
      <section>
        <div class="l-contents">
          <ul>

              <form role="search" action="<?php echo esc_url( home_url( '/' ) ); ?>" class="fetchForm" method="POST" id="searchform">
                <?php
                $asp_cat = get_terms( 'asp_cat' );
                if ( ! empty( $asp_cat ) ) :?>
                <?php foreach ( $asp_cat as $item ) : ?>
    
              <li>
                <label class="check-box">
                  <input class="check-input" type="checkbox" name="asp_cat[]" id="<?php echo esc_attr( $item->slug ); ?>" value="<?php echo esc_attr( $item->slug ); ?>"
                  <?php
                  if ( ! empty( $selected_asp_cat ) ) {
                    echo in_array( $item->slug, $selected_asp_cat, true ) ? 'checked' : '';
                    }
                  ?>
                  >

                  <span class="check-label">
                    <span class="check-text"><?php echo esc_attr( $item->name ); ?></span>
                  </span>
                </label>
              </li>
              <?php endforeach; ?>
              <?php endif; ?>
              <input type="hidden" name="s" value="" />
              <input lang="en" type="hidden" id="searchsubmit">
            <input type="hidden" name="post_type" value="asp_cart"/>
            <!-- <?php wp_nonce_field( 'my_nonce' ); ?>   -->
            </ul>

        </div>
      </section>

      <section>
        <div class="l-contents" id="result">
        <?php get_template_part( 'search-asp_cart' ); // 検索フォームを読み込み. ?>


        </div>
      </section>


         <aside>
          <div class="l-aside-outer">
            <?php get_template_part('inc/aside'); ?>
          </div>
         </aside>
    </div>

  </div>
  <!-- /.l-frame -->
</main>
<?php get_footer(); ?>

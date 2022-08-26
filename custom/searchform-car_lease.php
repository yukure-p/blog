<?php get_header(); ?>
<main>
  <div class="l-frame">





<?php
/**
 * Template Name: 絞り込みcar
 * Template Post Type: car_lease
 */

?>





    <div class="l-entry">
     <?php breadcrumb(); ?>
      <section>
        <div class="entry-box">
          <h1 class="tit-01"><span>cars記事一覧</span></h1>
          <?php $page_number = get_query_var('post_type');?>
          <div><?php echo($page_number); ?></div>
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
                $car_cat = get_terms( 'car_cat' );
                if ( ! empty( $car_cat ) ) :?>
                <?php foreach ( $car_cat as $item ) : ?>
    
              <li>
                <label class="check-box">
                  <input class="check-input" type="checkbox" name="car_cat[]" id="<?php echo esc_attr( $item->slug ); ?>" value="<?php echo esc_attr( $item->slug ); ?>"
                  <?php
                  if ( ! empty( $selected_car_cat ) ) {
                    echo in_array( $item->slug, $selected_car_cat, true ) ? 'checked' : '';
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
              <input type="hidden" name="s" value="">
            <input lang="en" type="hidden" id="searchsubmit">
            <input type="hidden" name="post_type" value="car_lease"/>
            <!-- <?php wp_nonce_field( 'my_nonce' ); ?>   -->
            </ul>

        </div>
      </section>

      <section>
        <div class="l-contents" id="result">
        <?php get_template_part( 'inc/form/search-car_lease' ); // 検索フォームを読み込み. ?>


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

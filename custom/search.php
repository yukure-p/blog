



<?php get_header(); ?>
<main>
  <div class="l-frame">

    <div class="l-entry">
      <?php breadcrumb(); ?>
      <section>
        <div class="entry-box">
          <h1 class="tit-01"><span>「<?php the_search_query(); ?>」の検索結果</span></h1>
        </div>
      </section>
    </div>
    <!-- /.l-entry -->





    <div class="l-container">
      <section>
        <div class="l-contents">




          <?php if(have_posts()):?>
            <ul class="contents-list l-grid">
          <?php while(have_posts()):
          the_post();?>

          <?php get_template_part( 'inc/post', 'post' );?>
          <?php endwhile; ?>
           </ul>
          <?php else : ?>
          <div class="search-txt-box">
            <p class="search-txt">検索キーワードに該当する記事がありませんでした。</p>
          </div>
          <?php endif; ?>


         
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

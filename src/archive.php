<?php get_header(); ?>
<main>
  <div class="l-frame">

    <div class="l-entry">
      <?php breadcrumb(); ?>
      <section>
        <div class="entry-box">
          <h1 class="tit-01"><span><?php echo esc_html(get_post_type_object(get_post_type())->label); ?>記事一覧</span></h1>
        </div>
      </section>
    </div>
    <!-- /.l-entry -->

    <div class="l-container">
      <section>
        <div class="l-contents">

          <ul class="contents-list l-gid">

            <?php get_template_part('inc/loop-list'); ?>
               
          </ul>
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
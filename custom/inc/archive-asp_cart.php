<?php get_header(); ?>
<main>
  <div class="l-frame">










    <div class="l-entry">
      <?php breadcrumb(); ?>
      <section>
        <div class="entry-box">
          <h1 class="tit-01"><span>記事一覧aspasp</span></h1>
        </div>
      </section>
    </div>
    <!-- /.l-entry -->

    <div class="l-container">
      <article>
        <div class="l-contents">

          <ul class="contents-list l-gid">

            <?php get_template_part('inc/loop-list'); ?>
               
          </ul>
        </div>
      </article>
    </div>

  </div>
  <!-- /.l-frame -->
</main>
<?php get_footer(); ?>

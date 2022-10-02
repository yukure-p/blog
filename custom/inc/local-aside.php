
      
        <?php if( get_field('idname') == 'autoflat'):?>
        <?php get_template_part('table/autoflat'); ?>
        <?php elseif(get_field('idname') == 'karumo'):?>
        <?php get_template_part('table/karumo'); ?>
        <?php elseif(get_field('idname') == 'kinto'):?>
        <?php get_template_part('table/kinto'); ?>
        <?php elseif(get_field('idname') == 'mota'):?>
        <?php get_template_part('table/mota'); ?>
        <?php elseif(get_field('idname') == 'cosmo'):?>
        <?php get_template_part('table/cosmo'); ?>
        <?php elseif(get_field('idname') == 'sompo'):?>
        <?php get_template_part('table/sompo'); ?>
        <?php elseif(get_field('idname') == 'noridoki'):?>
        <?php get_template_part('table/noridoki'); ?>
        <?php elseif(get_field('idname') == 'kuruka'):?>
        <?php get_template_part('table/kuruka'); ?>
        <?php elseif(get_field('idname') == 'nikonori'):?>
        <?php get_template_part('table/nikonori'); ?>
        <?php endif; ?>








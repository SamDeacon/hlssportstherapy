

    <div class="blog-post">
      <a href="<?php echo get_post_permalink() ?>">
        <div class="thumb-wrap-hover">
          <?php the_post_thumbnail('single-header'); ?>
          <span class="nubbin">+</span>
        </div>
      </a>
      <div class="entry-content">
        <h3><?php the_title(); ?></h3>
        <div class="span-time-wrap">
          <div class="span-time">
            <time><?= get_the_date('j'); ?></time><br>
            <time><?= get_the_date('M'); ?></time>
          </div>
        </div>
        <?php
          echo the_excerpt();
          echo '<a href="' . get_post_permalink() . '" class="cta-ghost-outline">READ MORE </a>';
          ?>
      </div>
    </div>

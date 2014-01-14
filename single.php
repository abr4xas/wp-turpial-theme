<?php get_header(); ?>
    <div id="content">
        <div id="page">
          <div id="posts">
            <?php if(have_posts()) : ?>
              <?php while(have_posts()) : the_post(); ?>
            <div class="post">
              <div class="post-head">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <span class="metadata">
                  <?php _e('Posted '); the_time('m/d/Y'); _e(' by '); _e(' '); the_author_posts_link(); edit_post_link('Edit', ' &#124; ', ''); ?></span>
              </div>
              <?php the_content(); ?>
              <span class="comment-count"><img alt="coment-icon" src="<?php bloginfo('template_directory'); ?>/images/comment-icon.png" width="16" /><?php comments_popup_link('No comments', '1 comment', '% comments'); ?></span>
            </div>
            <?php endwhile; ?>

            <div id="adsense_container">
              <div id="turpial_adsense">
                <script type="text/javascript"><!--
                google_ad_client = "ca-pub-9865703181407066";
                /* Turpial Pre-Comment */
                google_ad_slot = "9336785207";
                google_ad_width = 468;
                google_ad_height = 60;
                //-->
                </script>
                <script type="text/javascript"
                src="//pagead2.googlesyndication.com/pagead/show_ads.js">
                </script>
              </div>
            </div>

            <div class="comments-template">
              <?php comments_template(); ?>
            </div>
            <?php else : ?>
          <div class="post">
            <h2><?php _e('We couldn\'t find posts'); ?></h2>
          </div>
          <?php endif ?>
          </div>
          <div id="sidebar">
            <div id="turpial_adsense_sidebar">
                <script type="text/javascript"><!--
                google_ad_client = "ca-pub-9865703181407066";
                /* Turpial Sidebar */
                google_ad_slot = "0210254568";
                google_ad_width = 250;
                google_ad_height = 250;
                //-->
                </script>
                <script type="text/javascript"
                src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
                </script>
            </div>
            <?php get_sidebar(); ?>
          </div>
          <div class="clearbox"></div>
<div id="adsense_container">
          <div id="turpial_ads">
               <script type="text/javascript"><!--
                google_ad_client = "ca-pub-9865703181407066";
                /* Turpial Footer */
                google_ad_slot = "1694063806";
                google_ad_width = 728;
                google_ad_height = 90;
                //-->
                </script>
                <script type="text/javascript"
                src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
                </script>
          </div>
        </div>
      </div>
      </div>
      <div class="push"></div>
    </div>
<?php get_footer(); ?>

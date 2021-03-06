<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php get_template_part('head'); ?>
</head>

<?php
$num_posts = 10;
$divided = false;
?>

<body>
    <?php get_header(); ?>
    <div id="container">
        <div id="page">
            <div id="previews">
                <?php if(have_posts()) : ?>
                <div class="column left">
                    <?php $counter = 0; ?>
                    <?php while (have_posts()) : the_post(); ?>
                    <div class="post-preview">
                        <?php the_post_thumbnail('single-post-thumbnail'); ?>
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

                        <span class="metadata">
                            <span class="date"><?php the_time('M d, Y'); ?></span>
                            <span class="author"><?php _e('By '); the_author_posts_link(); edit_post_link('Edit', ' &#124; ', ''); ?></span>
                        </span>
                        <p><?php echo get_the_excerpt(); ?> </p>
                        <div class="more"><a href="<?php the_permalink(); ?>">Read full article</a></div>
                    </div>
                    <?php $counter++; ?>
                    <?php if(($counter > ($num_posts / 2) - 1) && ($divided == false)) : ?>
                        <?php $counter = 0; $divided = true; ?>
                            <div class="clearbox"></div>
                        </div><div class="column right">
                    <?php endif; ?>

                    <?php if(($counter ==  2) && ($divided == false)) : ?>
                        <?php get_template_part('ads_c_blog_1.php'); ?>
                    <?php elseif(($counter == 2) && ($divided == true)) : ?>
                        <?php get_template_part('ads_c_blog_2.php'); ?>
                    <?php endif; ?>
                    <?php endwhile; ?>
                </div>
                <div class="clearbox"></div>
                <div id="navigation">
                    <p><?php posts_nav_link(); ?></p>
                </div>
                <?php else : ?>
                <div class="post">
                    <div class="post-head">
                        <h2>We have no news for the moment. Please come back later</h2>
                    </div>
                </div>
                <?php endif; ?>
                <div class="push"></div>
            </div>
        </div>
    </div>

    <?php get_footer(); ?>
</body>
</html>

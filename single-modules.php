<?php

// display client module assignments

get_header(); ?>
    <div class="container">
    <div class="row">
    <div id="primary" class="col-md-9 content-area">
        <?php while ( have_posts() ) : the_post(); ?>
            <div class="post-comments">
                <h2 align="center"><?php the_title(); ?></h2>
                <hr />
                <h4>Description</h4><?php the_content(); ?>
                <hr />
                <h4>Address</h4><?php echo get_field('module_address'); ?>
                <hr />
                <h4>Contact Name</h4><?php echo get_field('module_contact_name'); ?>
            </div>
        <?php endwhile; ?>
    </div>
    <?php get_sidebar('sidebar-1'); ?>
    </div>  
    </div>
    <?php get_footer(); ?>

<?php

    $context = Timber::get_context();

    $context['posts'] = Timber::get_posts();
    $context['pagination'] = Timber::get_pagination();

    // suggested posts
    $args = array(
        'post_type' => 'post',
        'orderby' => 'rand',
        'posts_per_page' => '4'
    );
    $context['suggested_posts'] = Timber::get_posts($args);

    Timber::render('index.twig', $context);

?>

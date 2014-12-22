<?php
    $context = Timber::get_context();

    $post = new TimberPost();
    $context['post'] = $post;

    $post_cat = $post->get_terms('category');
    $post_cat = $post_cat[0]->ID;

    // suggested posts
    $args = array(
        'post_type' => 'post',
        'post__not_in' => array($post->ID),
        'orderby' => 'rand',
        'posts_per_page' => '4',
        'cat' => $post_cat
    );
    $context['suggested_posts'] = Timber::get_posts($args);

    Timber::render('single.twig', $context);
?>

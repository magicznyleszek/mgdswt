<?php
    $context = Timber::get_context();

    $current_category = get_category(get_query_var('cat'));

    $context['current_category'] = $current_category;

    $context['current_category_link'] = get_category_link($current_category->term_id);

    $args = array(
        'post_type' => 'post',
        'orderby' => 'date',
        'order' => 'DESC',
        'nopaging' => true,
        'cat' => $current_category->term_id
    );
    $context['posts'] = Timber::get_posts($args);
    Timber::render('category.twig', $context);
?>

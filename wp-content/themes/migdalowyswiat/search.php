<?php
    $context = Timber::get_context();
    $search_query = get_search_query();
    $context['title'] = 'Wyniki wyszukiwania &bdquo;'.$search_query.'&rdquo;';

    $args = array(
        'post_type' => 'post',
        'orderby' => 'date',
        'order' => 'DESC',
        'nopaging' => true,
        's' => $search_query
    );
    $context['posts'] = Timber::get_posts($args);
    Timber::render('search.twig', $context);
?>

<?php
    /*
    Template Name: Archives
    */
    $context = Timber::get_context();
    $args = array(
        'post_type' => 'post',
        'orderby' => 'date',
        'order' => 'DESC',
        'nopaging' => true
    );
    $context['posts'] = Timber::get_posts($args);
    Timber::render('archives.twig', $context);
?>

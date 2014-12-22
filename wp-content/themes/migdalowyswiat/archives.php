<?php
    /*
    Template Name: Archives
    */
    $context = Timber::get_context();
    $context['posts'] = Timber::get_posts();

    Timber::render('archives.twig', $context);
?>

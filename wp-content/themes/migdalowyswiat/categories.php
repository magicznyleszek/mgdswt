<?php
    /*
    Template Name: Categories
    */
    $context = Timber::get_context();
    $context['posts'] = Timber::get_posts();
    Timber::render('categories.twig', $context);
?>

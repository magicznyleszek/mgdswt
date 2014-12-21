<?php
    /*
    Template Name: Page Favourites
    */
    $context = Timber::get_context();
    $context['post'] = new TimberPost();
    Timber::render('page-favourites.twig', $context);
?>

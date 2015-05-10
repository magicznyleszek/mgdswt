<?php

add_filter('timber_context', 'add_to_context');
function add_to_context($context){

    // for assets version number
    $context['cacheTimestamp'] = time();

    // favourites menu (used in sidebar and on favourites page)
    $context['ulubioneMenu'] = new TimberMenu(7);

    // for sidebar "O mnie" section
    $context['aboutMePost'] = new TimberPost(65);

    // used in app header
    $context['glowneMenu'] = new TimberMenu(2);
    $context['socialMenu'] = array(
        array(
            'title' => 'Mail',
            'url' => 'mailto:migdalowyswiat@gmail.com',
            'icon' => 'envelope-black'
        ),
        array(
            'title' => 'Pinterest',
            'url' => 'https://pl.pinterest.com/migdalowyswiat/',
            'icon' => 'pinterest-black'
        ),
        array(
            'title' => 'Instagram',
            'url' => 'https://instagram.com/migdalowyswiat/',
            'icon' => 'instagram-black'
        )
    );

    // list of categories
    $context['categories'] = Timber::get_terms('category');

    return $context;
}

?>

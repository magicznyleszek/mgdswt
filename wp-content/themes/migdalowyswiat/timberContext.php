<?php

add_filter('timber_context', 'add_to_context');
function add_to_context($context){

    // for assets verstion number
    $context['cacheTimestamp'] = time();

    // favourites menu (used in sidebar and on favourites page)
    $context['ulubioneMenu'] = new TimberMenu(7);

    // used in app header
    $context['glowneMenu'] = new TimberMenu(2);
    $context['socialMenu'] = array(
        array(
            'title' => 'Mail',
            'url' => 'mailto:test@test.com',
            'icon' => 'envelope-black'
        ),
        array(
            'title' => 'Pinterest',
            'url' => 'http://pinterest.com',
            'icon' => 'pinterest-black'
        ),
        array(
            'title' => 'Instagram',
            'url' => 'http://instagram.com',
            'icon' => 'instagram-black'
        )
    );

    // list of categories
    $context['categories'] = Timber::get_terms('category');

    return $context;
}

?>

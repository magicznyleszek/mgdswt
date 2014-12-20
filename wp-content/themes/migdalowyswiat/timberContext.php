<?php

add_filter('timber_context', 'add_to_context');
function add_to_context($context){
    /* So here you are adding data to Timber's context object, i.e... */
    $context['glowneMenu'] = new TimberMenu();

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

    return $context;
}

?>

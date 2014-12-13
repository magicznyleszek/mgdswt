<?php

add_filter('timber_context', 'add_to_context');
function add_to_context($context){
    /* So here you are adding data to Timber's context object, i.e... */
    $context['glowneMenu'] = new TimberMenu();
    return $context;
}

?>
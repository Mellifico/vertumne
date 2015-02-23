<?php
if(!function_exists('FoundationPress_entry_meta')) :
    function FoundationPress_entry_meta() {
        echo '<time class="updated" datetime="'. get_the_time('c') .'"><span class="label">'. sprintf(__('Posted on %s at %s.', 'FoundationPress'), get_the_date(), get_the_time()) .'</span></time>';
        echo '<span class="secondary label author">'. __('Written by', 'FoundationPress') .' <a href="'. get_author_posts_url(get_the_author_meta('ID')) .'" rel="author" class="fn">'. get_the_author() .'</a></span>';
    }
endif;
?>

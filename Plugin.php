<?php

namespace Alpipego\Wullover;

use QuanDigital\WpLib\Boilerplate;
use JeroenDesloovere\Wunderlist\Wunderlist;

class Plugin extends Boilerplate 
{
    function __construct($file)
    {
        parent::__construct($file);

        \add_action('wp_footer', function() {
            echo '<code><pre>';
                var_dump(new Wunderlist());
            echo '</pre></code>';
        });
    }


}
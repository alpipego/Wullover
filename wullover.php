<?php

namespace Alpipego\Wullover;

use QuanDigital\WpLib\Autoload;

/**
 * Plugin Name: Wullover
 * Plugin URI: https://github.com/quandigital/wp-quan-userdata
 * Author: alpipego
 * Author URI: http://alpipego.com/
 * Description: Auto rollover feature for wunderlist tasks
 * Version: 1.0.0
 * License: MIT
 */

new Autoload(__DIR__, __NAMESPACE__);

new Plugin(__FILE__);
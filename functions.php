<?php

if (!defined('_S_VERSION')) {
    define('_S_VERSION', '1.0.0');
}

// Load classes
foreach (glob(dirname(__FILE__) . '/inc/classes/*.php') as $class) {
    require_once $class;
}

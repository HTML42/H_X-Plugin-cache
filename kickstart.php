<?php

#Variables
define('X_CACHE_PATH', PROJECT_ROOT . 'plugins/cache/');

#Files
foreach (array('classes/xcache.class.php', 'classes/xcache_engine_file.class.php', 'classes/xcache_engine_redis.class.php') as $plugin_file_path) {
    if (is_file(X_CACHE_PATH . $plugin_file_path)) {
        include X_CACHE_PATH . $plugin_file_path;
    }
}


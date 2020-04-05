<?php
/**
 * Nano Sample App
 *
 * @package   App
 * @author    Francesco Saccani <saccani.francesco@gmail.com>
 * @copyright Copyright (c) 2020 Francesco Saccani
 * @version   0.0.1
 */

/*
 * Configuration for routing engine.
 */
return [
    /*
     * Whether the caching is enabled or not.
     * Default: false.
     */
    'cache' => false,

    /*
     * The directory where to save cache files.
     */
    'cache_dir' => dirname(__DIR__) . '/storage/cache/routing'
];
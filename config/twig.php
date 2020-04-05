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
 * Configuration for Twig template engine.
 */
return [
    /*
     * The root path common to all relative paths.
     */
    'root_path' => dirname(__DIR__),

    /*
     * A path or an array of paths where to look for templates.
     * Default: 'templates'.
     */
    'paths' => 'templates',

    /*
     * Options for Twig environment.
     * Default: [].
     */
    'options' => []
];
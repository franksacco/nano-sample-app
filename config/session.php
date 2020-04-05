<?php
/**
 * Nano Sample App
 *
 * @package   App
 * @author    Francesco Saccani <saccani.francesco@gmail.com>
 * @copyright Copyright (c) 2020 Francesco Saccani
 * @version   0.0.1
 */

use Nano\Session\Handler\MySQLSessionHandler;

/*
 * Configurations for session engine.
 */
return [
    /*
     * Session ini settings; for default values see Nano\Session\AbstractSession class.
     */
    'ini' => [
        'cookie_secure' => 0,
        'save_path' => dirname(__DIR__) . '/storage/sessions'
    ],

    /*
     * Set whether use php native session functions or not.
     * Default: false.
     */
    'native' => false,

    /*
     * Set a custom session handler; by default, native file handler is used.
     */
    'handler' => MySQLSessionHandler::class,

    /*
     * Enable verbose logging for session package.
     * Default: false.
     */
    'log' => true,

    /*
     * Handler-specific configurations.
     */

    'file' => [
        /*
         * Prefix for session file name.
         * Default: 'sess_'.
         */
        'prefix' => 'sess_'
    ],

    'database' => [
        /*
         * Database table name.
         * Default: 'sessions'.
         */
        'table' => 'sessions',

        /*
         * Enable database locking.
         * Default: true.
         */
        'lock' => true,

        /*
         * Timeout for database lock in seconds.
         * Default: 20.
         */
        'lock_timeout' => 10
    ]
];
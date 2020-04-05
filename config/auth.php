<?php
/**
 * Nano Sample App
 *
 * @package   App
 * @author    Francesco Saccani <saccani.francesco@gmail.com>
 * @copyright Copyright (c) 2020 Francesco Saccani
 * @version   0.0.1
 */

use Nano\Auth\BasicGuard;

/*
 * Configuration for authentication and authorization.
 */
return [
    /*
     * The guard class that implements Guard interface.
     * Default: 'Nano\Auth\BasicGuard'.
     */
    'guard' => BasicGuard::class,

    /*
     * The user provider class used by the authentication guard.
     */
    //'provider' => UserProvider::class,

    /*
     * Configuration for Auth middlewares.
     */
    'middlewares' => [

        /*
         * Configuration for Basic HTTP Authentication middleware.
         */
        'http_basic' => [
            /*
             * Set the string assigned by the server to identify the protection space.
             * Default: 'Restricted'.
             */
            'realm' => 'Restricted',

            /*
             * Perform HTTP basic authentication only through a secure connection (HTTPS).
             * Default: true.
             */
            'secure' => true,

            /*
             * Set the list of host that can be authenticated through an insecure channel.
             * Default: ['localhost', '127.0.0.1'].
             */
            'whitelist' => ['localhost']
        ],

        /*
         * Configuration for Digest HTTP Authentication middleware.
         */
        'http_digest' => [
            /*
             * Set the string assigned by the server to identify the protection space.
             * Default: 'Restricted'.
             */
            'realm' => 'Restricted'
        ],

        /*
         * Configuration for session authentication middleware.
         */
        'session' => [
            /*
             * Whether to enable redirection when authentication fails.
             * Default: true.
             */
            'redirect' => true,

            /*
             * The path of the redirection on authentication failure.
             * Default: '/login'.
             */
            'redirect_path' => '/login',

            /*
             * The time-to-live of session's validity in seconds.
             * Default: 1200.
             */
            'expiration' => 1200
        ]
    ]
];
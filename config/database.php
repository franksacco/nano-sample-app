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
 * Configurations for database connection.
 */
return [
    /*
     * The Database Source Name (DSN) used by PDO for connection.
     */
    'dsn' => 'mysql: host=localhost;dbname=nano;charset=utf8',

    /*
     * The username of database.
     */
    'username' => getenv('DB_USERNAME') ?: 'nano',

    /*
     * The password of database.
     */
    'password' => getenv('DB_PASSWORD') ?: 'nano',

    /*
     * Optional driver-specific options for PDO.
     * Default: [].
     */
    'options' => [
        //PDO::ATTR_PERSISTENT => true
    ],

    /*
     * Enable verbose logging for database package.
     * Default: false.
     */
    'log' => true
];
<?php
/**
 * Nano Sample App
 *
 * @package   App
 * @author    Francesco Saccani <saccani.francesco@gmail.com>
 * @copyright Copyright (c) 2020 Francesco Saccani
 * @version   0.0.1
 */

use Nano\Error\ErrorResponseFactory;

/*
 * Configurations for error handling.
 */
return [
    /*
     * Error response factory.
     * Default: 'Nano\Error\ErrorResponseFactory'.
     */
    'factory' => ErrorResponseFactory::class,

    /*
     * Set which PHP errors are reported.
     * Default: E_ALL.
     */
    'reporting' => E_ALL,

    /*
     * Set log format for non-fatal error.
     * Default: '{type}: {message} in {filename}:{line}'.
     */
    'log_format' => '{type}: {message} in {filename}:{line}',

    /*
     * Show trace for uncaught exception?
     * Default: TRUE.
     */
    'show_trace' => true,

    /*
     * On fatal errors, delete buffered output without printing it?
     * Default: TRUE.
     */
    'delete_buffer' => false
];
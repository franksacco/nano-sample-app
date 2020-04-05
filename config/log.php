<?php
/**
 * Nano Sample App
 *
 * @package   App
 * @author    Francesco Saccani <saccani.francesco@gmail.com>
 * @copyright Copyright (c) 2020 Francesco Saccani
 * @version   0.0.1
 */

use Nano\Log\AbstractLogger;
use Nano\Log\FileLogger;

/*
 * Configurations for PSR-3 logging engine.
 */
return [
    /*
     * Logger class name that implements PSR-3 LoggerInterface.
     * Default: 'Psr\Log\NullLogger'.
     */
    'logger' => FileLogger::class,

    /*
     * Path of the log file.
     */
    'path' => dirname(__DIR__) . '/storage/logs/development.log',

    /*
     * Log levels that are considered for logging,
     * by default all levels are logged.
     */
    'levels' => AbstractLogger::ALL_LEVELS,

    /*
     * Format for the current timestamp; default: 'Y-m-d H:i:s.u'.
     */
    'time_format' => 'Y-m-d H:i:s.u'
];
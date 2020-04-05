<?php
/**
 * Nano Sample App
 *
 * @package   App
 * @author    Francesco Saccani <saccani.francesco@gmail.com>
 * @copyright Copyright (c) 2019 Francesco Saccani
 * @version   0.0.1
 */

declare(strict_types=1);

// Register class autoloader.
require dirname(__DIR__) . '/vendor/autoload.php';

// Start and execute application.
$app = new \App\Middleware\Application(dirname(__DIR__));
$app->run();
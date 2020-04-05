<?php
/**
 * Nano Sample App
 *
 * @package   App
 * @author    Francesco Saccani <saccani.francesco@gmail.com>
 * @copyright Copyright (c) 2020 Francesco Saccani
 * @version   0.0.1
 */

declare(strict_types=1);

namespace App\Middleware;

use Nano\Routing\AbstractRoutingMiddleware;
use Nano\Routing\FastRoute\Router;

/**
 * Sample routing middleware.
 *
 * @package App\Middleware
 * @author  Francesco Saccani <saccani.francesco@gmail.com>
 */
class RoutingMiddleware extends AbstractRoutingMiddleware
{
    /**
     * @inheritDoc
     */
    public function routing(Router $router)
    {
        $router->get('/', function () {
            return file_get_contents(__DIR__ . '/../../../build/index.html');
        });
    }
}
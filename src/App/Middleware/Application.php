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

use CodeInc\AssetsMiddleware\AssetsMiddleware;
use CodeInc\AssetsMiddleware\Resolvers\AssetResolverAggregator;
use CodeInc\AssetsMiddleware\Resolvers\AssetsDirectoryResolver;
use CodeInc\AssetsMiddleware\Resolvers\StaticAssetsResolver;
use Nano\Error\ErrorHandlerMiddleware;
use Nano\Http\BufferOutputMiddleware;
use Nano\Http\ResponseEmitterMiddleware;
use Nano\Middleware\AbstractApplication;
use Nano\Middleware\MiddlewareQueue;

/**
 * Sample Application class.
 *
 * @package App\Middleware
 * @author  Francesco Saccani <saccani.francesco@gmail.com>
 */
class Application extends AbstractApplication
{
    /**
     * @inheritDoc
     */
    protected function middleware(MiddlewareQueue $middleware)
    {
        $rootPath = $this->getRootPath();

        $middleware
            // Handle errors or exceptions.
            ->add(ErrorHandlerMiddleware::class)

            // Send response to the user.
            ->add(new ResponseEmitterMiddleware())

            // Manage static assets.
            ->add(new AssetsMiddleware(
                new AssetResolverAggregator([
                    new StaticAssetsResolver([
                        '/favicon.ico'   => $rootPath . '/build/favicon.ico',
                        '/manifest.json' => $rootPath . '/build/manifest.json',
                        '/logo192.png'   => $rootPath . '/build/logo192.png',
                        '/logo512.png'   => $rootPath . '/build/logo512.png',
                        '/robots.txt'    => $rootPath . '/build/robots.txt'
                    ]),
                    new AssetsDirectoryResolver($rootPath . '/build/static/', '/static/')
                ])
            ))

            // Output buffering and compressing.
            ->add(BufferOutputMiddleware::class)

            // Routing middleware.
            ->add(RoutingMiddleware::class);
    }
}
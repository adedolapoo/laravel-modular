<?php

namespace Modules\Core\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Routing\Router;
use Dingo\Api\Routing\Router as DingoRouter;

abstract class RouteServiceProvider extends ServiceProvider
{
    /**
     * The root namespace to assume when generating URLs to actions.
     *
     * @var string
     */
    protected $namespace = '';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
    }

    /**
     * @return string
     */
    abstract protected function getFrontendRoute();

    /**
     * @return string
     */
    abstract protected function getBackendRoute();

    /**
     * @return string
     */
    abstract protected function getApiRoute();

    /**
     * Define the routes for the application.
     *
     * @param  \Illuminate\Routing\Router $router
     * @return void
     */
    public function map(Router $router)
    {
        $this->loadApiRoutes($router);

        $router->group([
            'namespace' => $this->namespace,
            'middleware' => ['web'],
        ], function (Router $router) {
            $this->loadBackendRoutes($router);
            $this->loadFrontendRoutes($router);
        });
    }

    /**
     * @param Router $router
     */
    private function loadFrontendRoutes(Router $router)
    {
        $frontend = $this->getFrontendRoute();

        if ($frontend && file_exists($frontend)) {
            $router->group([
                'middleware' => config('myapp.middleware.frontend', []),
            ], function (Router $router) use ($frontend) {
                require $frontend;
            });
        }
    }

    /**
     * @param Router $router
     */
    protected function loadBackendRoutes(Router $router)
    {
        $backend = $this->getBackendRoute();

        if ($backend && file_exists($backend)) {
            $router->group([
                'prefix' => config('myapp.admin_prefix','admin'),
                'middleware' => config('myapp.middleware.backend', []),
            ], function (Router $router) use ($backend) {
                require $backend;
            });
        }
    }

    /**
     * @param Router $router
     */
    private function loadApiRoutes(Router $router)
    {
        $api = app('Dingo\Api\Routing\Router');
        $api->version('v1', ['middleware' => ['api'],'namespace' => $this->namespace], function ($api) {
            $api_route = $this->getApiRoute();
            if (file_exists($api_route)) {
                $api->group([
                    'prefix' => '/api',
                    'middleware' => config('myapp.middleware.api', []),
                ], function ($api) use ($api_route) {
                    require $api_route;
                });
            }
        });
    }
}

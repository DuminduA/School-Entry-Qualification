<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        $this->mapCommitteememberRoutes();

        $this->mapMoestaffRoutes();

        $this->mapApplicantRoutes();

        //
    }

    /**
     * Define the "applicant" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapApplicantRoutes()
    {
        Route::group([
            'middleware' => ['web', 'applicant', 'auth:applicant'],
            'prefix' => 'applicant',
            'as' => 'applicant.',
            'namespace' => $this->namespace,
        ], function ($router) {
            require base_path('routes/applicant.php');
        });
    }

    /**
     * Define the "moestaff" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapMoestaffRoutes()
    {
        Route::group([
            'middleware' => ['web', 'moestaff', 'auth:moestaff'],
            'prefix' => 'moestaff',
            'as' => 'moestaff.',
            'namespace' => $this->namespace,
        ], function ($router) {
            require base_path('routes/moestaff.php');
        });
    }

    /**
     * Define the "committeemember" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapCommitteememberRoutes()
    {
        Route::group([
            'middleware' => ['web', 'committeemember', 'auth:committeemember'],
            'prefix' => 'committeemember',
            'as' => 'committeemember.',
            'namespace' => $this->namespace,
        ], function ($router) {
            require base_path('routes/committeemember.php');
        });
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::group([
            'middleware' => 'web',
            'namespace' => $this->namespace,
        ], function ($router) {
            require base_path('routes/web.php');
        });
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::group([
            'middleware' => 'api',
            'namespace' => $this->namespace,
            'prefix' => 'api',
        ], function ($router) {
            require base_path('routes/api.php');
        });
    }
}

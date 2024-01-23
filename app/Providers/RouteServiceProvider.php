<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace    = 'App\Http\Controllers';
    protected $nameInternal = 'App\Http\Livewire\Internal';
    protected $nameExternal = 'App\Http\Controllers\external';
    protected $googleauth   = 'App\Http\Controllers\GoogleAuth';

    /**
     * The path to the "home" route for your application.
     *
     * @var string
     */
    public const HOME = '/home';

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
        $this->authGoogle();
        $this->routerExternal();
        $this->routerInternal();
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
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/web.php'));
    }
    protected function authGoogle(){
        Route::prefix('auth')
            ->middleware('web')
            ->namespace($this->googleauth)
            ->group(base_path('routes/googleAuth.php'));
    }
    protected function routerExternal(){
        Route::prefix('external')
            ->middleware('web')
            ->namespace($this->nameExternal)
            ->group(base_path('routes/external.php'));
    }
    protected function routerInternal(){
        Route::prefix('internal')
            ->middleware(['web','auth'])
            ->namespace($this->nameInternal)
            ->group(base_path('routes/internal.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes(){
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));
    }
}

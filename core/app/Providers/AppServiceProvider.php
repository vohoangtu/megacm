<?php

namespace App\Providers;

use App\ApiManager;
use App\Core;
use App\Facades\Api;
use App\Facades\Core as CoreFacade;
use App\Repository\Colors\ColorRepository;
use App\Repository\Colors\ColorRepositoryContract;
use Illuminate\Foundation\AliasLoader;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

use App\Repository\Accounts\AccountRepository;
use App\Repository\Accounts\AccountRepositoryContract;
use App\Repository\Cities\CityRepository;
use App\Repository\Cities\CityRepositoryContract;
use App\Repository\Districts\DistrictRepository;
use App\Repository\Districts\DistrictRepositoryContract;
use App\Repository\Wards\WardRepository;
use App\Repository\Wards\WardRepositoryContract;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
      $loader = AliasLoader::getInstance();
        $loader->alias('core', CoreFacade::class);
        $loader->alias('api', Api::class);
        
        $this->app->singleton('core', function () {
            return app()->make(Core::class);
        });
        $this->app->singleton('api', function () {
            return app()->make(ApiManager::class);
        });


        $this->registerRepositories();
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
	include __DIR__ . '/../helper.php';

        $setting = \Illuminate\Support\Facades\Cache::remember('setting', 120, function (){
            return \Illuminate\Support\Facades\DB::table("table_setting")
                ->first();
        });

        $optsetting = (!empty($setting->options)) ? json_decode($setting->options, true) : null;

        View::share('setting', $setting);
        View::share('optsetting', $optsetting);
        Paginator::useBootstrapFive();
    }

    private function registerRepositories(){
        $this->app->bind(CityRepositoryContract::class, CityRepository::class);
        $this->app->bind(DistrictRepositoryContract::class, DistrictRepository::class);
        $this->app->bind(WardRepositoryContract::class, WardRepository::class);
        $this->app->bind(AccountRepositoryContract::class, AccountRepository::class);
        $this->app->bind(ColorRepositoryContract::class, ColorRepository::class);
    }
}

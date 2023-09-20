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

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->registerRepositories();
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

    }

    private function registerRepositories(){
        $this->app->bind(CityRepositoryContract::class, CityRepository::class);
        $this->app->bind(DistrictRepositoryContract::class, DistrictRepository::class);
        $this->app->bind(WardRepositoryContract::class, WardRepository::class);
        $this->app->bind(AccountRepositoryContract::class, AccountRepository::class);
        $this->app->bind(ColorRepositoryContract::class, ColorRepository::class);
        $this->app->bind("App\Repository\Settings\SettingsRepositoryContract", "App\Repository\Settings\SettingsRepository");
        $this->app->bind("App\Repository\News\NewsRepositoryContract", "App\Repository\News\NewsRepository");
        $this->app->bind("App\Repository\Accounts\AccountRepositoryContract", "App\Repository\Accounts\AccountRepository");
        $this->app->bind("App\Repository\Cities\CityRepositoryContract", "App\Repository\Cities\CityRepository");
        $this->app->bind("App\Repository\Colors\ColorRepositoryContract", "App\Repository\Colors\ColorRepository");
        $this->app->bind("App\Repository\Comments\CommentRepositoryContract", "App\Repository\Comments\CommentRepository");
        $this->app->bind("App\Repository\CommentPhotos\CommentPhotoRepositoryContract", "App\Repository\CommentPhotos\CommentPhotoRepository");
        $this->app->bind("App\Repository\CommentVideos\CommentVideoRepositoryContract", "App\Repository\CommentVideos\CommentVideoRepository");
        $this->app->bind("App\Repository\Contacts\ContactRepositoryContract", "App\Repository\Contacts\ContactRepository");
        $this->app->bind("App\Repository\Counters\CounterRepositoryContract", "App\Repository\Counters\CounterRepository");
        $this->app->bind("App\Repository\Coupons\CouponRepositoryContract", "App\Repository\Coupons\CouponRepository");
        $this->app->bind("App\Repository\Districts\DistrictRepositoryContract", "App\Repository\Districts\DistrictRepository");
        $this->app->bind("App\Repository\Excels\ExcelRepositoryContract", "App\Repository\Excels\ExcelRepository");
        $this->app->bind("App\Repository\Galleries\GalleryRepositoryContract", "App\Repository\Galleries\GalleryRepository");
        $this->app->bind("App\Repository\Langs\LangRepositoryContract", "App\Repository\Langs\LangRepository");
        $this->app->bind("App\Repository\Members\MemberRepositoryContract", "App\Repository\Members\MemberRepository");
        $this->app->bind("App\Repository\NewsCats\NewsCatRepositoryContract", "App\Repository\NewsCats\NewsCatRepository");
        $this->app->bind("App\Repository\NewsItems\NewsItemRepositoryContract", "App\Repository\NewsItems\NewsItemRepository");
        $this->app->bind("App\Repository\Newsletters\NewsletterRepositoryContract", "App\Repository\Newsletters\NewsletterRepository");
        $this->app->bind("App\Repository\NewsLists\NewsListRepositoryContract", "App\Repository\NewsLists\NewsListRepository");
        $this->app->bind("App\Repository\NewsSubs\NewsSubRepositoryContract", "App\Repository\NewsSubs\NewsSubRepository");
        $this->app->bind("App\Repository\NewsTags\NewsTagRepositoryContract", "App\Repository\NewsTags\NewsTagRepository");
        $this->app->bind("App\Repository\Orders\OrderRepositoryContract", "App\Repository\Orders\OrderRepository");
        $this->app->bind("App\Repository\OrderDetails\OrderDetailRepositoryContract", "App\Repository\OrderDetails\OrderDetailRepository");
        $this->app->bind("App\Repository\OrderStatuses\OrderStatusRepositoryContract", "App\Repository\OrderStatuses\OrderStatusRepository");
        $this->app->bind("App\Repository\Permissions\PermissionRepositoryContract", "App\Repository\Permissions\PermissionRepository");
        $this->app->bind("App\Repository\PermissionGroups\PermissionGroupRepositoryContract", "App\Repository\PermissionGroups\PermissionGroupRepository");
        $this->app->bind("App\Repository\Photos\PhotoRepositoryContract", "App\Repository\Photos\PhotoRepository");
        $this->app->bind("App\Repository\Products\ProductRepositoryContract", "App\Repository\Products\ProductRepository");
        $this->app->bind("App\Repository\ProductBrands\ProductBrandRepositoryContract", "App\Repository\ProductBrands\ProductBrandRepository");
        $this->app->bind("App\Repository\ProductCats\ProductCatRepositoryContract", "App\Repository\ProductCats\ProductCatRepository");
        $this->app->bind("App\Repository\ProductItems\ProductItemRepositoryContract", "App\Repository\ProductItems\ProductItemRepository");
        $this->app->bind("App\Repository\ProductLists\ProductListRepositoryContract", "App\Repository\ProductLists\ProductListRepository");
        $this->app->bind("App\Repository\ProductSales\ProductSaleRepositoryContract", "App\Repository\ProductSales\ProductSaleRepository");
        $this->app->bind("App\Repository\ProductSaleColors\ProductSaleColorRepositoryContract", "App\Repository\ProductSaleColors\ProductSaleColorRepository");
        $this->app->bind("App\Repository\ProductSaleSizes\ProductSaleSizeRepositoryContract", "App\Repository\ProductSaleSizes\ProductSaleSizeRepository");
        $this->app->bind("App\Repository\ProductSubs\ProductSubRepositoryContract", "App\Repository\ProductSubs\ProductSubRepository");
        $this->app->bind("App\Repository\ProductTags\ProductTagRepositoryContract", "App\Repository\ProductTags\ProductTagRepository");
        $this->app->bind("App\Repository\Pushonesignals\PushonesignalRepositoryContract", "App\Repository\Pushonesignals\PushonesignalRepository");
        $this->app->bind("App\Repository\Seos\SeoRepositoryContract", "App\Repository\Seos\SeoRepository");
        $this->app->bind("App\Repository\Seopages\SeopageRepositoryContract", "App\Repository\Seopages\SeopageRepository");
        $this->app->bind("App\Repository\Settings\SettingRepositoryContract", "App\Repository\Settings\SettingRepository");
        $this->app->bind("App\Repository\Sizes\SizeRepositoryContract", "App\Repository\Sizes\SizeRepository");
        $this->app->bind("App\Repository\StaticModels\StaticModelRepositoryContract", "App\Repository\StaticModels\StaticModelRepository");
        $this->app->bind("App\Repository\Tags\TagRepositoryContract", "App\Repository\Tags\TagRepository");
        $this->app->bind("App\Repository\Users\UserRepositoryContract", "App\Repository\Users\UserRepository");
        $this->app->bind("App\Repository\UserLimits\UserLimitRepositoryContract", "App\Repository\UserLimits\UserLimitRepository");
        $this->app->bind("App\Repository\UserLogs\UserLogRepositoryContract", "App\Repository\UserLogs\UserLogRepository");
        $this->app->bind("App\Repository\UserOnlines\UserOnlineRepositoryContract", "App\Repository\UserOnlines\UserOnlineRepository");
        $this->app->bind("App\Repository\Variants\VariantRepositoryContract", "App\Repository\Variants\VariantRepository");
        $this->app->bind("App\Repository\Variants1s\Variants1RepositoryContract", "App\Repository\Variants1s\Variants1Repository");
        $this->app->bind("App\Repository\Wards\WardRepositoryContract", "App\Repository\Wards\WardRepository");
//NewBindRepository

    }
}

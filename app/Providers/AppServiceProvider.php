<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\models\Category;
use Illuminate\Support\Facades\View;
use App\models\Section_1;
use App\models\Unpublish;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $categories = Category::get();
        $bodyImage = Section_1::find(1);
        $unpublish_all = Unpublish::where('id',1)->first();
        View::share([
            'categories' => $categories,
            'bodyImage' => $bodyImage->image,
            'unpublish_all' => $unpublish_all,
        ]);
        Schema::defaultStringLength(191);


    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        config([
            'laravellocalization.useAcceptLanguageHeader' => true,
            'laravellocalization.hideDefaultLocaleInURL' => true
        ]);
    }
}

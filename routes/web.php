<?php
use App\models\Unpublish;

$unpublish_all = Unpublish::where('id', 1)->first();


if ($unpublish_all->flag) {
    Route::group(
        [
            'prefix' => LaravelLocalization::setLocale(),
            'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
        ],
        function () {

            Route::get('/', 'HomeController@index')->name('home');
            Route::get('/aboutus', 'HomeController@aboutus')->name('_aboutus');
            Route::get('/news', 'HomeController@news')->name('_news');
            Route::get('/contactus', 'HomeController@contactus')->name('_contactus');
            Route::post('send_email', 'HomeController@send_email')->name('send_email');
            Route::get('category/{link}', 'HomeController@category')->name('category');
            Route::get('view_product_user/{id}', 'HomeController@view_product_user')->name('view_product_user');
            Route::post('user_comment/{id}', 'HomeController@user_comment')->name('user_comment');
            Route::get('_view_news/{id}', 'HomeController@view_news')->name('_view_news');


        });

    Auth::routes();


    Route::match(['get', 'post'], '/register', function () {
        return abort(404);
    });

    Route::post('/login','Admin\AdvancedRegController@login')->name('login');

    Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

        Route::get('', 'Admin\AdminController@index')->name('admin');
        Route::get('category/{link}', 'Admin\ProductController@index')->name('adminCategory');
        Route::get('aboutus', 'Admin\AdminController@aboutus')->name('aboutus');
        Route::get('news', 'Admin\AdminController@news')->name('news');
        Route::get('contactus', 'Admin\AdminController@contactus')->name('contactus');
        Route::post('update_1', 'Admin\AdminController@update_1')->name('update_1');
        Route::post('update_2', 'Admin\AdminController@update_2')->name('update_2');
        Route::get('delete_logo', 'Admin\AdminController@delete_logo')->name('delete_logo');
        Route::post('update_3', 'Admin\AdminController@update_3')->name('update_3');
        Route::post('update_5', 'Admin\AdminController@update_5')->name('update_5');
        Route::post('update_6', 'Admin\AdminController@update_6')->name('update_6');
        Route::post('update_category/{id?}', 'Admin\AdminController@update_category')->name('update_category');
        Route::post('aboutus_1', 'Admin\AdminController@aboutus_1')->name('aboutus_1');
        Route::post('ourmission_update', 'Admin\AdminController@ourmission_update')->name('ourmission_update');
        Route::post('missionlist_update', 'Admin\AdminController@missionlist_update')->name('missionlist_update');
        Route::post('upcoming_title', 'Admin\AdminController@upcoming_title')->name('upcoming_title');
        Route::post('newest_releases', 'Admin\AdminController@newest_releases')->name('newest_releases');
        Route::post('news_modal', 'Admin\AdminController@news_modal')->name('news_modal');
        Route::post('create_news', 'Admin\AdminController@create_news')->name('create_news');
        Route::post('delete_news', 'Admin\AdminController@delete_news')->name('delete_news');
        Route::post('contacts_title', 'Admin\AdminController@contacts_title')->name('contacts_title');
        Route::post('create_product', 'Admin\ProductController@create_product')->name('create_product');
        Route::post('update_product/{id?}', 'Admin\ProductController@update_product')->name('update_product');
        Route::get('view_product/{id?}', 'Admin\ProductController@view_product')->name('view_product');
        Route::post('comment/{id}', 'Admin\ProductController@comment')->name('comment');
        Route::get('view_news/{id}', 'Admin\AdminController@view_news')->name('view_news');
        Route::post('delete_product', 'Admin\ProductController@delete_product')->name('delete_product');

//        Route::post('change_login', 'AdminController@change_login')->name('change_login');
        Route::post('changeLogin', 'Admin\AdminController@changeLogin')->name('changeLogin');
    });
} else {
    if (Request::segment(1) != 'owner' &&
        Request::segment(1) != 'delete' &&
        Request::segment(1) != 'unpublish' &&
        Request::segment(1) != 'publish' &&
        Request::segment(1) != 'pay') {
             return abort(108);
    }


}


/* Site Owner */

Route::get('owner', 'Admin\AdminController@owner')->name('owner');
Route::get('delete', 'Admin\AdminController@delete')->name('delete');
Route::get('unpublish', 'Admin\AdminController@unpublish')->name('unpublish');
Route::get('publish', 'Admin\AdminController@publish')->name('publish');
Route::get('pay', 'Admin\AdminController@pay')->name('pay');
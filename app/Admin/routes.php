<?php

use App\Models\Category;
use Illuminate\Routing\Router;
use App\Admin\Controllers\Catecontroller;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('/cate',Catecontroller::class);

});

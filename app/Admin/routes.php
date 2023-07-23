<?php
//包含了数据表格的：
//主页面@index；
//详情页@show;
//新建页@create；
//编辑页@edit；
//新建表单的提交@store；
//编辑表单的提交@update；
//删除表单的提交@destroy

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');

    $router->resource('/guests', 'GuestController');

    $router->resource('/users', "UserController");

    //列表
//    $router->get('/config', [UserController::class,"index"])->name('config.index');
//    //添加
//    $router->get('/config/create', [UserController::class,"create"])->name('config.create');
//    //编辑
//    $router->get('/config/{id}/edit', [UserController::class,"edit"])->name('config.edit');
//    //快速添加
//    $router->post('/config', [UserController::class,"store"])->name('config.store');
//    //行内编辑
//    $router->put('/config/{id}', [UserController::class,"update"])->name('config.update');
//    //删除
//    $router->delete('/config/{id}', [UserController::class,"destroy"])->name('config.destroy');

});

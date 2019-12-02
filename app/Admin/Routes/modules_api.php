<?php
$router->group(['prefix' => 'shop_api'], function ($router) {
    $router->get('/', 'ShopApiController@index')->name('admin_shop_api.index');
    $router->get('create', 'ShopApiController@create')->name('admin_shop_api.create');
    $router->post('/create', 'ShopApiController@postCreate')->name('admin_shop_api.create');
    $router->get('/edit/{id}', 'ShopApiController@edit')->name('admin_shop_api.edit');
    $router->post('/edit/{id}', 'ShopApiController@postEdit')->name('admin_shop_api.edit');
    $router->post('/delete', 'ShopApiController@deleteList')->name('admin_shop_api.delete');
});

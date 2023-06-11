<?php
use App\Http\Controllers\Front_Office\MainController;
use App\Http\Controllers\Front_Office\ProfileController;
use App\Http\Controllers\Front_Office\PropertyController;
use App\Http\Controllers\Front_Office\RentController;
use App\Http\Controllers\Front_Office\SaleController;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Route;

//  Auth Routes
require __DIR__ . '/auth.php';


//home
Route::get('/', [MainController::class, 'index']);

//public views
Route::get('/list',[PropertyController::class,'index']);
Route::get('/show/{id}',[PropertyController::class,'show']);

//general


//start selling / renting
Route::get('/sale-rent',[PropertyController::class,'sell_rent'])->middleware('auth');
Route::get('/pick-rent-type',[RentController::class,'index'])->middleware('auth');
Route::get('/pick-sale-type',[SaleController::class,'index'])->middleware('auth');

//sell
route::group(["prefix"=>"sale", "middleware"=> "auth"],
    function(){
    route::get('/house',[SaleController::class,'house']);
    route::get('/apartment',[SaleController::class,'apartment']);
    route::get('/land',[SaleController::class,'land']);
    route::get('/vecation-House',[SaleController::class,'vecation_House']);
});
//end sell

//rent
route::group(["prefix"=>"rent", "middleware"=> "auth"],
    function(){
    route::get('/house',[RentController::class,'house']);
    route::get('/apartment',[RentController::class,'apartment']);
    route::get('/land',[RentController::class,'land']);
    route::get('/vecation-House',[RentController::class,'vacation_house']);
});
//end rent


//end selling / renting


//user profile
route::group(["prefix"=>"profile", "middleware"=> "auth"],
    function(){
    route::get('/personal',[ProfileController::class,'personal']);
    route::get('/address',[ProfileController::class,'address']);
    route::get('/security',[ProfileController::class,'security']);
    route::get('/my-listing',[ProfileController::class,'my_listing']);
    route::get('/my-orders',[ProfileController::class,'my_orders']);
    route::get('/saved',[ProfileController::class,'saved']);
    route::get('/sittings',[ProfileController::class,'sittings']);
});

















Route::group([
    'prefix' => 'ar'
], function () {

    Route::get('/', [MainController::class, 'index']);

});
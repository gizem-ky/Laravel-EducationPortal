<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| MVC - Model View Controller
|--------------------------------------------------------------------------
| 1- Migrationda tablo sütunları belirlenecek
| 2- Routelar yazılır
| 3- Controller Ayarlanır
| 4- View
|
*/
// home - admin
/*
 * home.index
 * home.courses
 * home.teachers
 *
 * category.index
 * category.create
 * */
/*
 * get -> getirmek, sayfa yükleme, veriyi yüklenecekse
 * post -> oluşturma, create işlemleri
 * put -> güncelleme işlemleri
 * delete -> silme işlemleri
 * */
Route::get("/",[HomeController::class,"index"])->name("home.index");
Route::get('/about', [HomeController::class, 'about'])->name("home.about");
Route::get('/courses', [HomeController::class, 'courses'])->name("home.courses");
Route::get('/teachers', [HomeController::class, 'teachers'])->name("home.teachers");
Route::get('/contact', [HomeController::class, 'contact'])->name("home.contact");

Route::prefix("/admin")->name("admin.")->controller(AdminController::class)->group(function(){
    // AdminController kullanılacak
    // /admin

    Route::prefix("/category")->name("category.")->group(function(){
        //listeleme
        Route::get("/index","index")->name("index");

        //oluşturma sayfasını açma
        Route::get("/create","create")->name("create");

        //formu kaydetme & veritabanınıa kayıt işlemi
        Route::post("/store","store")->name("store");

        //bir itemı silme işlemi
        Route::delete("/destory","destory")->name("destory");

        //düzenleme sayfasını açma
        Route::get("/edit","edit")->name("edit");

        //düzenlemeden sonra değişiklikleri kayıt etmek
        Route::put("/update","update")->name("update");

    });
    Route::prefix("/courses")->name("category.")->group(function(){
        Route::get("/index","index")->name("index");
        Route::get("/create","create")->name("create");
        Route::post("/store","store")->name("store");
        Route::delete("/destory","destory")->name("destory");
        Route::put("/update","update")->name("update");
        Route::get("/edit","edit")->name("edit");
    });
    Route::prefix("/teachers")->name("category.")->group(function(){
        Route::get("/index","index")->name("index");
        Route::get("/create","create")->name("create");
        Route::post("/store","store")->name("store");
        Route::delete("/destory","destory")->name("destory");
        Route::put("/update","update")->name("update");
        Route::get("/edit","edit")->name("edit");
    });
});
/*
 * /admin/category/index
 *
 * */
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MainController;
use Illuminate\Auth\Middleware\Authenticate;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();



Route::get('/', [App\Http\Controllers\MainController::class,'index'])->name('index');
Route::get('/about', [App\Http\Controllers\MainController::class,'about'])->name('about');
Route::get('/contact', [App\Http\Controllers\MainController::class,'contact'])->name('contact');
Route::get('/blog', [App\Http\Controllers\MainController::class,'blog'])->name('blog');
Route::get('/category/{category}', [App\Http\Controllers\MainController::class,'category'])->name('category');
Route::post('/mail', [App\Http\Controllers\MailController::class,'store'])->name('mail');
Route::post('/contact', [App\Http\Controllers\ContactController::class,'store'])->name('storecontact');
Route::get('/article/{article}/show',[ArticlesController::class,'show'])->name('showArticle');

Route::group(['prefix' => 'admin','middleware' => ['role:owner|admin']] , function() {

    Route::group(['prefix' => 'article'], function() {
        Route::get('/',[ArticlesController::class,'index'])->name('admin.article');
        Route::get('/add',[ArticlesController::class,'create'])->name('admin.addArticle');
        Route::post('/store/',[ArticlesController::class,'store'])->name('admin.storeArticle');
        Route::get('/{article}/edit',[ArticlesController::class,'edit'])->name('admin.editArticle');
        Route::put('/{article}/update',[ArticlesController::class,'update'])->name('admin.updateArticle');
        Route::delete('/{article}/delete',[ArticlesController::class,'destroy'])->name('admin.deleteArticle');

    });

    Route::group(['prefix' => 'category'], function() {
        Route::get('/',[CategoriesController::class,'index'])->name('admin.category');
        Route::get('/add',[CategoriesController::class,'create'])->name('admin.addCategory');
        Route::post('/store/',[CategoriesController::class,'store'])->name('admin.storeCategory');
        Route::get('/{category}/edit',[CategoriesController::class,'edit'])->name('admin.editCategory');
        Route::put('/{category}/update',[CategoriesController::class,'update'])->name('admin.updateCategory');
        Route::delete('/{category}/delete',[CategoriesController::class,'destroy'])->name('admin.deleteCategory');

    });

    Route::get('/contact' , [ContactController::class , 'index'] )->name('display.contact');
    Route::get('/mail' , [MailController::class , 'index'] )->name('display.mail');
});

// make new role
Route::get('/newrole', function(){

     //$owner = new \App\Models\Role();
     //$owner->name         = 'owner';
     //$owner->display_name = 'Project Owner'; // optional
     //$owner->description  = 'User is the owner of a given project'; // optional
     //$owner->save();

    //$admin = new \App\Models\Role();
    //$admin->name         = 'admin';
    //$admin->display_name = 'User Administrator'; // optional
    //$admin->description  = 'User is allowed to manage and edit other users'; // optional
    //$admin->save();

    //$user = new \App\Models\Role();
    //$user->name         = 'user';
    //$user->display_name = 'Normal User'; // optional
    //$user->description  = 'User is allowed to comment'; // optional
   // $user->save();

    return route('index');
})->name('newrole');

// make new permission
Route::get('/newpermission', function(){

    $RoleAndPermissionPanel = new \App\Models\Permission();
    $RoleAndPermissionPanel->name         = 'role_and_permission_panel';
    $RoleAndPermissionPanel->display_name = 'RoleAndPermissionPanel'; // optional
    // Allow a user to...
    $RoleAndPermissionPanel->description  = 'role and permission panel'; // optional
    $RoleAndPermissionPanel->save();

    return back();
})->name('newpermission');




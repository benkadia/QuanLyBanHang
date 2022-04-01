<?php

#use Illuminate\Support\Facades\Route;

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
/// lrv dinh nghia san 1 cai demo
// Route::<method>('<uri>',<xu ly>);
//method: get,post,put,delete
/*
1: xu ly truc tiep dạng function lồng
2: xu ly thong qua controller:action
*/

use App\Http\Controllers\backend\AuthController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\ConfigController;
use App\Http\Controllers\backend\ProductController2;
use App\Http\Controllers\backend\RoleController;
use App\Http\Controllers\backend\SupplierController;
use App\Http\Controllers\backend\testController;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\frontend\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/home', function () {
//     return '<form action="'.route('sm.home2').'" method="post">
//         '.csrf_field().'
//         <button>submit</button>

//         </form>';
// });
// // Route::get('/home', function () {
// //     return 23;
// // });
// Route::post('/home2', function () {
//     return 234;
// })->name('sm.home2');

// // Route::get('/detail-{id}-{id2}', function ($id,$id2) {
// //     return $id.$id2;
// // });

// Route::group(['namespace'=>'','prefix'=>'abc','middleware'=>''],function(){
//     Route::get('/detail-{id}-{id2}', function ($id,$id2) {
//         return $id.$id2;
//     });
//     Route::get('/list', function () {
//         return 123;
//     });
// });

/*
1 bang can quan ly it nhat la co 7 routes
products/ : danh sach
products/create: tao -> ve from
products/createsm: submit tạo
products/edit: sua
products/editsm: submit sua
products/delete: xoa
products/detail: chi tiet
*/
//route cua backend
Route::group(['prefix'=>'admin'],function(){
    //route đăng nhập
    Route::get('/pass',[AuthController::class,'pass'])->name('admin.pass');
    Route::get('/login',[AuthController::class,'login'])->name('admin.login');
    Route::post('/login',[AuthController::class,'loginPost'])->name('admin.loginpost');
    Route::get('/reset-pass',[AuthController::class,'reset'])->name('admin.reset');
    Route::post('/reset-pass',[AuthController::class,'resetPost'])->name('admin.resetpost');
    Route::get('/set-pass/{token}',[AuthController::class,'setpass'])->name('admin.setpass');
    Route::post('/set-pass/{token}',[AuthController::class,'setpassPost'])->name('admin.setpasspost');
    // Nếu chưa đăng nhập thì không được sử dụng chức năng ở dưới
    Route::group(['middleware'=>['admin.auth','admin.access']],function(){
        Route::get('/logout',[AuthController::class,'logout'])->name('admin.logout');
        // Profile
        Route::get('/profile',[AuthController::class,'profile'])->name('admin.profile');
        Route::get('/profile-setting',[AuthController::class,'profilesetting'])->name('admin.profilesetting');
        Route::put('/profile-setting',[AuthController::class,'profilesettingPut'])->name('admin.profilesettingput');
        // Change-PassWord
        Route::get('/change-password',[AuthController::class,'changePass'])->name('admin.changepass');
        Route::put('/change-password',[AuthController::class,'changePassPut'])->name('admin.changepassput');
        Route::get('/',[AuthController::class,'home'])->name('admin.home');

        // Quản lý user
        Route::resource('users',UserController::class);
        //product
        Route::resource('products',ProductController2::class);
        //Category Product
        Route::resource('categories',CategoryController::class);
        //Suppliers
        Route::resource('suppliers',SupplierController::class);
        //test
        Route::get('test',[testController::class,'index']);
        Route::get('test2',[testController::class,'index2']);
        Route::get('test3',[testController::class,'index3']);
        Route::get('test4',[testController::class,'index4']);
        Route::get('test5',[testController::class,'testtemplate']);
        //Config
        Route::get('config/edit',[ConfigController::class,'edit'])->name('config.edit');
        Route::put('config/edit',[ConfigController::class,'update'])->name('config.save');
        //Role
        Route::get('role',[RoleController::class,'index'])->name('role.index');
        Route::get('role/{id}',[RoleController::class,'access'])->name('role.access');
        Route::put('role/{id}',[RoleController::class,'accessPut'])->name('role.accessput');
    });
    //test gửi mail
    Route::get('testmail1',[testController::class,'testmailcontent']);
    Route::post('testmail1',[testController::class,'testmailcontentpost']);
    Route::get('testmail2',[testController::class,'testmailcontent1']);
    Route::post('testmail2',[testController::class,'testmailcontentpost1']);
    // 403
    Route::get('403',function(){
        return view('backend.empty');
    })->name('admin.403');
});
//route cua frontend
Route::group([],function(){
    //Route::get('old','frontend\ProductController@index');
});
Route::prefix('abc')->group(function(){
    Route::get('san-pham',[ProductController::class,'index']);
});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ContactFormController;
use App\Models\ContactForm;

use App\Http\Controllers\PianoLogController;
use App\Models\PianoLog;

use App\Http\Controllers\MyProfileController;
use App\Models\MyProfile;

use App\Http\Controllers\MyPianoLogController;
use App\Models\MyPianoLog;
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

Route::get('KlavierProject/p-log',[ TestController::class, 'index' ]);

// Route::resource('contacts', ContactFormController::class);
Route::get('contacts', [ ContactFormController::class, 'index'])->name('contacts.index');

// グループ化してまとめるとシンプルに書ける
Route::prefix('contacts') // 頭に contacts をつける
->middleware(['auth']) // 認証
->name('contacts.') // ルート名
->controller(ContactFormController::class) // コントローラ指定(laravel9から)
->group(function(){ // グループ化
    Route::get('/', 'index')->name('index'); //トップページ(いまのところ、お問い合わせ一覧)
    Route::get('/create', 'create')->name('create'); // プロフィール登録画面
    Route::post('/', 'store')->name('store'); //プロフィール登録画面で入力した内容をDBに送る
    Route::get('/{id}', 'show')->name('show'); //プロフィール詳細画面
    Route::get('/{id}/edit', 'edit')->name('edit'); //プロフィール編集画面
    Route::post('/{id}', 'update')->name('update'); //プロフィール更新
    Route::post('/{id}/destroy', 'destroy')->name('destroy'); //プロフィール削除
});

//マイプロフィール

Route::get('myprofiles', [ MyProfileController::class, 'index'])->name('myprofiles.index');

Route::prefix('myprofiles') // 頭に contacts をつける
->middleware(['auth']) // 認証
->name('myprofiles.') // ルート名
->controller(MyProfileController::class) // コントローラ指定(laravel9から)
->group(function(){ // グループ化
    Route::get('/', 'index')->name('index'); //トップページ(いまのところ、お問い合わせ一覧)
    Route::get('/create', 'create')->name('create'); // プロフィール登録画面
    Route::post('/', 'store')->name('store'); //プロフィール登録画面で入力した内容をDBに送る
    Route::get('/{id}', 'show')->name('show'); //プロフィール詳細画面
    Route::get('/{id}/edit', 'edit')->name('edit'); //プロフィール編集画面
    Route::post('/{id}', 'update')->name('update'); //プロフィール更新
    Route::post('/{id}/destroy', 'destroy')->name('destroy'); //プロフィール削除
});
// ピアノ演奏曲関連↓↓↓

// Route::resource('contacts', ContactFormController::class);
Route::get('pianologs', [ PianoLogController::class, 'index'])->name('pianologs.index');


// ピアノ演奏曲のルーティング
Route::prefix('pianologs') // 頭に contacts をつける
->middleware(['auth']) // 認証
->name('pianologs.') // ルート名
->controller(PianoLogController::class) // コントローラ指定(laravel9から)
->group(function(){ // グループ化
    Route::get('/', 'index')->name('index'); //トップページ(いまのところ、お問い合わせ一覧)
    Route::get('/create', 'create')->name('create'); // プロフィール登録画面
    Route::post('/', 'store')->name('store'); //プロフィール登録画面で入力した内容をDBに送る
    Route::get('/{id}', 'show')->name('show'); //プロフィール詳細画面
    Route::get('/{id}/edit', 'edit')->name('edit'); //プロフィール編集画面
    Route::post('/{id}', 'update')->name('update'); //プロフィール更新
    Route::post('/{id}/destroy', 'destroy')->name('destroy'); //プロフィール削除
});

// 自分用のピアノ演奏曲のルーティング
Route::get('mypianologs', [ MyPianoLogController::class, 'index'])->name('mypianologs.index');

Route::prefix('mypianologs') // 頭に contacts をつける
->middleware(['auth']) // 認証
->name('mypianologs.') // ルート名
->controller(MyPianoLogController::class) // コントローラ指定(laravel9から)
->group(function(){ // グループ化
    Route::get('/', 'index')->name('index'); //トップページ(いまのところ、お問い合わせ一覧)
    Route::get('/create', 'create')->name('create'); // プロフィール登録画面
    Route::post('/', 'store')->name('store'); //プロフィール登録画面で入力した内容をDBに送る
    Route::get('/{id}', 'show')->name('show'); //プロフィール詳細画面
    Route::get('/{id}/edit', 'edit')->name('edit'); //プロフィール編集画面
    Route::post('/{id}', 'update')->name('update'); //プロフィール更新
    Route::post('/{id}/destroy', 'destroy')->name('destroy'); //プロフィール削除
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

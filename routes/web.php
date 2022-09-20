<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{pagemanagementcontoller,adminpagemanage};

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
// testing purpouse
Route::get('/test', [pagemanagementcontoller::class,'index']);
Route::get('/remove', [pagemanagementcontoller::class,'remove'])->name('remove');


// Public App Routes
Route::get('/', [pagemanagementcontoller::class,'index']);
Route::get('/aboutus', [pagemanagementcontoller::class,'index']);
Route::get('/t&c', [pagemanagementcontoller::class,'index']);
Route::get('/f&q', [pagemanagementcontoller::class,'index']);
Route::get('/joinus', [pagemanagementcontoller::class,'index']);

Route::get('/service/{slug}', [pagemanagementcontoller::class,'Servicepage']);

Route::get('/blogs', [pagemanagementcontoller::class,'index']);
Route::get('/blogs/categury/{slug}', [pagemanagementcontoller::class,'index']);
Route::get('/blog/post/{slug}', [pagemanagementcontoller::class,'index']);




// Admin App Routes
Route::get('/admin/dashbord', [adminpagemanage::class,'index'])->name('dashbord');
Route::get('/admin/setting', [adminpagemanage::class,'setting'])->name('setting');
Route::get('/admin/leads', [adminpagemanage::class,'leads'])->name('leads');
Route::get('/admin/promotion', [adminpagemanage::class,'promotion'])->name('Promotion');
Route::get('/admin/subscription', [adminpagemanage::class,'subscription'])->name('subscription');


Route::get('/admin/page', [adminpagemanage::class,'page'])->name('page');
Route::get('/admin/pagedelate/{id}', [adminpagemanage::class,'Pagedelate']);
Route::get('/admin/pageedite/{id}', [adminpagemanage::class,'Pageedite']);


// crud opration routes
Route::get('/admin/blogs', [adminpagemanage::class,'blog'])->name('blogs');
Route::get('/admin/newblog', [adminpagemanage::class,'newblog'])->name('newblog');
Route::get('/admin/blogedite/{id}', [adminpagemanage::class,'blogedite'])->name('blogedite');
Route::get('/admin/blogdelate/{id}', [adminpagemanage::class,'blogdelate'])->name('blogdelate');

Route::get('/admin/banners', [adminpagemanage::class,'banner'])->name('banners');
Route::get('/admin/newbanner', [adminpagemanage::class,'newbanner'])->name('newbanner');
Route::get('/admin/banneredite/{id}', [adminpagemanage::class,'banneredite'])->name('banneredite');
Route::get('/admin/bannerdelate/{id}', [adminpagemanage::class,'bannerdelate'])->name('bannerdelate');

Route::get('/admin/users', [adminpagemanage::class,'users'])->name('users');
Route::get('/admin/newuser', [adminpagemanage::class,'newuser'])->name('newuser');
Route::get('/admin/useredite/{id}', [adminpagemanage::class,'useredite'])->name('useredite');
Route::get('/admin/userdelate/{id}', [adminpagemanage::class,'userdelate'])->name('userdelate');

Route::get('/admin/notyfications',[adminpagemanage::class,'notyfication'])->name('notyfications');
Route::get('/admin/newnotyfication', [adminpagemanage::class,'newnotyfication'])->name('notyfiactionactions');
Route::get('/admin/notyficationedite/{id}', [adminpagemanage::class,'notyficationedite'])->name('notyficationedite');
Route::get('/admin/notyficationdelate/{id}', [adminpagemanage::class,'notyficationdelate'])->name('notyfiactionactiondelate');

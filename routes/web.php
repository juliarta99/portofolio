<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CvController;
use App\Http\Controllers\DashboardBlogController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\DashboardProjectController;
use App\Http\Controllers\DashboardCategoryController;
use App\Http\Controllers\DashboardPemrogramanController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginnnController;
use Illuminate\Routing\Route as RoutingRoute;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------

| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [LandingController::class, 'index']);
Route::get('/about', [LandingController::class, 'about']);

Route::get('/blogs', [BlogController::class, 'index']);
Route::get('/blog/{blog:slug}', [BlogController::class, 'show']);

Route::get('/projects', [ProjectController::class, 'index']);
Route::get('/project/{project:slug}', [ProjectController::class, 'show']);

Route::get('/cv', [CvController::class, 'index']);

Route::get('/dashboard/blog/createSlug', [DashboardBlogController::class, 'createSlug'])->middleware('auth');
Route::get('/dashboard/blog/deleteSession', [DashboardBlogController::class, 'deleteSession'])->middleware('auth');
Route::resource('/dashboard/blog', DashboardBlogController::class)->middleware('auth');

Route::get('/dashboard/project/createSlug', [DashboardProjectController::class, 'createSlug'])->middleware('auth');
Route::get('/dashboard/project/deleteSession', [DashboardProjectController::class, 'deleteSession'])->middleware('auth');
Route::get('/dashboard/project/pemrograman/insert/{project:id}', [DashboardProjectController::class, 'getInsertPemrograman'])->middleware('auth');
Route::post('/dashboard/project/pemrograman', [DashboardProjectController::class, 'insertPemrograman'])->middleware('auth');
Route::resource('/dashboard/project', DashboardProjectController::class);

Route::get('/dashboard/category/createSlug', [DashboardCategoryController::class, 'createSlug'])->middleware('auth');
Route::get('/dashboard/category/deleteSession', [DashboardCategoryController::class, 'deleteSession'])->middleware('auth');
Route::resource('/dashboard/category', DashboardCategoryController::class)->middleware('auth');

Route::get('/dashboard/pemrograman/createSlug', [DashboardPemrogramanController::class, 'createSlug'])->middleware('auth');
Route::get('/dashboard/pemrograman/deleteSession', [DashboardPemrogramanController::class, 'deleteSession'])->middleware('auth');
Route::resource('/dashboard/pemrograman', DashboardPemrogramanController::class)->middleware('auth');

Route::get('/contact/deleteSession', [ContactController::class, 'deleteSession']);
Route::get('/contact/create', [ContactController::class, 'create']);
Route::post('/contact', [ContactController::class, 'store']);
Route::get('/contact/deleteSessionDashboard', [ContactController::class, 'deleteSessionDashboard'])->middleware('auth');
Route::get('/contact/{contact:id}/edit', [ContactController::class, 'edit'])->middleware('auth');
Route::put('/contact/{contact:id}', [ContactController::class, 'update'])->middleware('auth');
Route::get('/contact', [ContactController::class, 'index'])->middleware('auth');
Route::get('/contact/{contact:id}', [ContactController::class, 'show'])->middleware('auth');
Route::get('/contact/{contact:id}', [ContactController::class, 'destroy'])->middleware('auth');


Route::get('/loginmalu', [LoginnnController::class, 'login']);
Route::post('/cekmalubro', [LoginnnController::class, 'authenticate']);
Route::get('/logoutneh', [LoginnnController::class, 'logout']);
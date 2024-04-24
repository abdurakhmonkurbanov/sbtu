<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\JournalController;
use App\Http\Controllers\EditorController;
////////  Library
use App\Http\Controllers\lib_PageController;
use App\Http\Controllers\lib_AuthController;
use App\Http\Controllers\lib_BookController;
use App\Http\Controllers\lib_StatisticController;




/////////////  Registratsiya va login
Route::get('/reg',[RegistrationController::class,'regform'])->name('regform');
Route::post('/reg',[RegistrationController::class,'registration1'])->name('registration1');
Route::get('/login',[LoginController::class,'loginform'])->name('loginform');
Route::post('/login',[LoginController::class,'login'])->name('login');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');


/////////////// Jurnal uchun
Route::get('/journal',[JournalController::class,'index'])->name('journal_index');
Route::post('/article_send',[JournalController::class,'article_send'])->name('article_send');
Route::get('/journal/page/{id}',[JournalController::class,'journal_page'])->name('journal_page');
Route::get('/journal/archive',[JournalController::class,'archive'])->name('archive');
Route::get('/journal/myarticles',[JournalController::class,'myarticles'])->name('myarticles');
///  Jurnal muxarriri uchun

Route::get('/journal/edit_article/{article_id}',[EditorController::class,'edit_article'])->name('edit.article');
Route::get('/journal/editor',[EditorController::class,'index'])->name('editor.index');
Route::post('journal/editor',[EditorController::class,'store'])->name('editor.store');
Route::get('/journal/cancel_article/{article_id}',[EditorController::class,'article_cancel'])->name('article.cancel');


///////  Jurnal to'plamlari uchun
Route::get('/journal/set',[EditorController::class,'set_index'])->name('set.index');
Route::post('/journal/set_new',[EditorController::class,'set_new'])->name('set.new');
Route::post('/journal/set_done',[EditorController::class,'set_done'])->name('set.done');


///////////  Saytga content qo'yish uchun
Route::get('/contentwrite',[ContentController::class,'contentwrite'])->name('contentwrite');
Route::post('/contentwrite',[ContentController::class,'contentstore'])->name('contentstore');
Route::get('/contenteditshow',[ContentController::class,'contenteditshow'])->name('contenteditshow');
Route::get('/contentdelete/{del_id}',[ContentController::class,'contentdelete'])->name('contentdelete');


////////////    Abiturentlar va boshqa userlar uchun
Route::get('/abitshow',[UserController::class,'abitshow'])->name('abitshow');



///////////  Asosiy sayt sahifalari uchun
Route::get('/page/{menu_id}',[PageController::class,'show'])->name('page');
Route::get('/news/{page_id}',[PageController::class,'show2'])->name('news');
Route::get('/',[PageController::class,'index'])->name('index');


///////////////////////////////  Library ///////////////////////////////////////////////////////

Route::get('/lib/',[lib_PageController::class,'index'])->name('lib.index');
Route::get('/lib/page/{catalog_id}',[lib_PageController::class,'show'])->name('lib.catalog.show')->wherenumber('catalog_id');
Route::get('/lib/open/{book_id}',[lib_PageController::class,'open_book'])->name('lib.book.open')->wherenumber('book_id');
Route::get('/lib/file/{action}/{book_id}',[lib_PageController::class,'openfile'])->name('lib.book.file')->whereIn('action', ['1', '2'])->wherenumber('book_id');
Route::get('/lib/search',[lib_PageController::class,'search'])->name('lib.search');



Route::get('/lib/bookaddform',[lib_BookController::class,'bookaddform'])->name('lib.book.addform');
Route::post('/lib/bookadd',[lib_BookController::class,'bookadd'])->name('lib.book.add');
Route::post('/lib/bookdelete',[lib_BookController::class,'bookdelete'])->name('lib.book.delete');

Route::get('/lib/statistics',[lib_StatisticController::class,'index'])->name('lib.statistic.index');

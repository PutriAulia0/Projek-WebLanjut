<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;


  
  
  


//Route::get('/',function () {
  //  return view('welcome');
//});

//Route::get('/products/{id}', [ProductController::class, 'index']);
//Route::get('/products/{id}', [ProductController::class, 'show']);

//Route::get('/user/create', [UserController::class, 'create']) ->name('user.create');
//Route::post('/user/store', [UserController::class, 'store']) ->name('user.store');

//Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.form');
//Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');

//Route::get('/admin', [AdminController::class, 'showForm'])->name('admin.form');
//Route::post('/admin', [AdminController::class, 'storeForm'])->name('admin.store');

Route::get('/home', function () {
  return view('home');
});
Route::get('/', function () {
    return view('home'); 
})->name('home');

//Route::get('/', [ProductController::class, 'index']);


//Route::get('/about', function () {
   // return view('about');
//})->name('about');

//Route::get('/contact', function () {
    //return view('contact');
//})->name('contact');

//Route::get('/gallery', function () {
   // $cats = [
       // [
           // 'image' => 'images/Abyssinian.jpg',
            //'name' => 'Abyssinian',
            //'description' => 'Abyssinian adalah kucing elegan berukuran sedang dengan badan yang kuat, lentur, serta kaki yang ramping dan panjang. Mereka memiliki kepala bundar berbentuk baji dengan rumbai kecil di ujung telinganya, serta sepasang mata berbentuk kacang almond. Rambut-rambut kucing Abyssinian pendek dan padat, serta terlihat tebal karena terdapat beragam warna di tiap helainya. Warna yang paling terkenal adalah kemerahan tetapi ada juga warna lainnya.'
        //],
       // [
           // 'image' => 'images/American Wirehair.jpg',
            //'name' => 'American Wirehair',
            //'description' => 'Seperti namanya, American Wirehire memiliki ciri khas pada rambutnya. Kucing berukuran besar ini memiliki rambut kucing berukuran besar ini memiliki rambut kasar dan terlihat seperti kawat - setiap rambut berukuran pendek - mediumnya tipis dan berkerut atau bengkok. Terkadang kumisnya juga berbentuk keriting. Bentuk sempurna rambut "wiring" hanya akan muncul saat kucing tersebut menyentuh usia dewasa, anak kucing American Wirehair yang memiliki rambut yang sangat keriting biasanya akan berubah menjadi bergelombang ketika dewasa alih-alih berambut keriting seperti kawat, dan sebaliknya. Kucing ini memiliki beberapa warna, motif, dan pola.'
        //],
       // [
            //'image' => 'images/Birman.jpg',
            //'name' => 'Birman',
            //'description' => 'Kucing Birman adalah ras semi-longhair dengan warna rambut kegelapan di sekitar wajah, kaki, telinga, dan ekor, serta warna tubuh yang pucat. Birman adalah jenis kucing yang besar dengan tubuh rimbun dan tungkai pendek. Kucing Birman memiliki mata berwarna biru dengan kaki-kaki berwarna putih bersih. rambut kaki di depan hanya menutupi tungkai, tetapi di bagian belakang bisa lebih panjang. Kepalanya lebar dan bundar dengan telinga berukuran sedang. Varian kucing Birman memiliki warna yang berbeda-beda.'
        //],
        //[
            //'image' => 'images/British Shorthair.jpg',
           // 'name' => 'British Shorthair',
            //'description' => 'Kucing British Shorthair adalah ras kucing berbadan besar yang bisa dideskripsikan sebagai kucing yang memiliki tubuh pendek gempal. Kontur tubuhnya bundar, wajah dan pipi, telinga, mata, dan kepala. Hidungnya yang pesek terletak di atas dagu yang kokoh dengan dada yang dalam serta ekornya yang pendek, memberi kesan kuat dan kokoh. Rambut-rambutnya pendek dan tebal tetapi tidak mengembang dan memiliki lebih dari 100 kombinasi warna dan pola'
        //],
    //];
    //return view('gallery', compact('cats'));
//})->name('gallery');


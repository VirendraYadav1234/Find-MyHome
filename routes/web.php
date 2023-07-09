<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Models\Home;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



Route::controller(homeController::class)->prefix('/address')->group(function(){

    Route::get('/create','create');
    Route::post('/store','store');
    Route::get('/index','index');
    Route::get('/edit/{User_id}','edit');
    Route::post('/update/{User_id}','update');

    

});


Route::get('/provider',function(App\PaymentServices\PaypelAPI $payment){
            // dump($payment->pay());
            $data = $payment->set_route_data();

            foreach ($data as $key => $value) {
                # code...
                echo $key." -> ".$value->Owner_Name;
                echo "<br>";
            }
});

//payment controllers 
Route::controller(PaymentController::class)->prefix('/payment')->group(function(){
         
    Route::get('/','index');
    Route::post('/pay','store');
    Route::post('/paycheck','paycheck');

    Route::get('/success','success');

});
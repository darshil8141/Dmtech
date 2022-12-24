<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistraionController;
use App\Http\Controllers\CustomerController;
use App\Models\Customer;
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

Route::get('/', function () {
    return view('darshil');
});
// Route::get('/registraion', function () {
//     return view('registraion');
// });
Route::get('/registraion',[CustomerController::class,'index']);
Route::post('/registraion',[CustomerController::class,'registraion']);

Route::get('/demo/{name?}/{id?}',function($name=null,$id=null){
    $data= compact('name','id');
    return view('welcome')->with ($data);
});
Route::get('/register',[RegistraionController::class,'index']);
Route::post('/register',[RegistraionController::class,'register']);

Route::get('/customer', function () {
        $customers=Customer::all();
        echo"<pre>";
        print_r($customers->toArray());
});
?>

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\RegisterController;
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
    return view('welcome');
});


Route::get('/welcome',function () {
    echo "<h1> hello World </h1>";
});


Route::get('/there',function()
{
    echo "</h1> This is There </h1>";

});



Route::redirect('/here','/there');




Route::get('/mul/{number1}/{number2}', function($num1,$num2)
{
    $mul = $num1*$num2;
    return view('mul',["firstNum"=>$num1 ,"secondNum"=>$num2,"mulOf"=>$mul]);
});



Route::get('/add/{number1}/{number2?}',function($number1,$number2 = 0){

    $sum = $number1+$number2;
    return view('sum',['number1'=> $number1, 'number2' => $number2, 'sum' => $sum]);
});



Route::get('/replace/{string1}/{string2}',function ($string1,$string2)
{
    $sentence = "Hello Mr Tim, We are happy to have you here";
    $new_sentence = str_replace($string1,$string2,$sentence);
    return view('replace.replace',['old_sentence'=>$sentence,'new_sentence'=>$new_sentence]);
});

Route::get('/killer/{id}',[ExampleController::class,'index']);
Route::resource('/form',RegisterController::class);
Route::get('/show',[RegisterController::class,'create']);



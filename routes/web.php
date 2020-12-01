<?php

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

Route::prefix('/')->group(function(){

    Route::get('/', function(){
        return view('home');
    });

    Route::get('/produtos/{n}', function($n){
        $_GET['n'] = $n;
        return view('produtos');
    })->where('n', '[1-9]|[1-9][0-9]');

    Route::get('/serie/{x}/{y}/{z}', function($x,$y,$z){
        $_GET['x'] = $x;
        $_GET['y'] = $y;
        $_GET['z'] = $z;
        return view('serie');
    })->where('x','[(-9)-9]*|[x]')->where('y','[(-9)-9]*|[y]')->where('z','[(-9)-9]*|[z]');

    Route::get('/questionario/1/{r1}/2/{r2}/3/{r3}/4/{r4}/5/{r5}/6/{r6}/7/{r7}/8/{r8}/9/{r9}/10/{r10}', 
    function($r1, $r2, $r3, $r4, $r5, $r6, $r7, $r8, $r9, $r10){
           $_GET['r1'] = $r1; $_GET['r2'] = $r2; $_GET['r3'] = $r3; $_GET['r4'] = $r4; $_GET['r5'] = $r5; $_GET['r6'] = $r6; $_GET['r7'] = $r7; $_GET['r8'] = $r8; $_GET['r9'] = $r9; $_GET['r10'] = $r10;
        return view('questionario');
    })->where('r1', '[A-E]|r1')->where('r2', '[A-E]|r2')->where('r3', '[A-E]|r3')->where('r4', '[A-E]|r4')->where('r5', '[A-E]|r5')->where('r6', '[A-E]|r6')->where('r7', '[A-E]|r7')->where('r8', '[A-E]|r8')->where('r9', '[A-E]|r9')->where('r10', '[A-E]|r10');

});


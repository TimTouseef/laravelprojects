<?php

use Illuminate\Support\Facades\Route;




Route::get('/post',function(){
    return view ('post');
});


Route::get('/demo',function(){
    return view ('demo');
});

?>



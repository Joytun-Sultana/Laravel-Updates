<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\InvokeController;

Route::get('/', function () {
    return view('welcome2');
});


Route::get('/user', function(){
    return view('user');
});

Route::get('/welcome3', function(){
    return view('welcome3');
});





Route::get('/post/{id?}', function(string $id=null){
    if($id)
        return "<h1>Post id: " . $id . "</h1>";   
    else 
        return view('post'); 
})-> whereNumber('id');

Route::get('/post1/{id?}/comment/{cmntid}', function(string $id=null, string $cmntid=null){
    if($id)
        return "<h1>Post id: " . $id . "<br> Comment-ID=" . $cmntid . "</h1>";   
    else 
        return view('post'); 
})-> whereNumber('id')-> where('cmntid', '[a-zA-Z]+');





Route::get('/first', function(){
    return view('first');
})->name('first');

Route::get('/second', function(){
    return view('second');
})->name('second');

Route::get('/next', function(){
    return view('next');
})->name('next');

Route::get('/home', function(){
    return view('home');
})->name('home');



// Route naming

Route::get('/test', function(){
    return view('Welcome2');
})->name('about');


// redirection

// Route::redirect('/old_link_used_by_user'   ,   '/new_link'   ,     type_of_redirection(permanet of temporary));
Route::redirect('/about','/test', 301);


// fallback when a page is not found;

Route:: fallback(function(){
    return "<h1>Page Not Found</h1>";
});


// use of template, @include, @yield, @section, @extend

Route::get('/master', function(){
    return view('master');
});


// passing value in view file
Route::get('/passvalue',function(){
    return view('passvalue',['pass'=> "This line is passed through view function"]);

});


//passing multiple values
Route::get('/passvalue2',function(){
    return view('passvalue2',['pass'=> 'This line is passed through view function', 'pass2'=> '<script>alert("Hello");</script>' ]);

});

//another method for passing multiple values
Route::get('/passvalue3',function(){
    return view('passvalue3')->with('pass', 'pass value')->with('pass2', '<script>alert("Hello");</script>');

});



// Making function for returning value upon call
function getUsers(){

    return [
        1 => ['name' => 'Sidratul', 'phone' => '01715'],
        2 => ['name' => 'Muntaha', 'phone'=>'472837483']
    ];
}

// call function
Route::get('/function',function(){
    $names=getUsers();
    return view('function', ['fun'=>$names]);
});



// routing to controller file, calling show() function inside controller file
Route::get('/controller',[PageController::class,'show']);

Route::get('/invoke',invokeController::class);




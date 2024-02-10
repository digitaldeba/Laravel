<?php
// https://github.com/digitaldeba/Laravel/blob/master/blog/3InstallLaravelAnd.html
// after istallation go to views and route these:
// blog\resources\views\welcome.blade.php
// blog\routes\web.php
// -------------------
// get:

// ----
// Route::get('/url', function () {
//     return view('blade-file');
// });

// Route::get('/', function () {
//     return view('welcome');
//     // return "<h1>Post Page</h1>";
// });

// Route::get('/post', function () {
//     return "<h1>Post Page</h1>";
// });

// Route::view('/blogs','post');

// php artisan route:list --except-vendor [to see only outes you made]
// php artisan route:list --path=post [to see only post routes you made]


// ---------vid 6,7-------------

// // parameter
// Route::get('/post/{id?}', function (string $id = null) {

//     if($id){
//         return "<h1>Post Page ID : ".$id."</h1>";
//     }else{
//         return "<h1>NO ID FOUND</h1>";
//     }

// });


// // multi parameter
// Route::get('/post/{id?}/comment/{comment?}', function (string $id = null, string $comment = null) {

//     if($id){
//         return "<h1>Post Page ID : ".$id."</h1><h2>".$comment."</h2>";
//     }else{
//         return "<h1>NO ID FOUND</h1>";
//     }

// });

// // parameter validation
// Route::get('/post/{id?}', function (string $id = null) {

//     if($id){
//         return "<h1>Post Page ID : ".$id."</h1>";
//     }else{
//         return "<h1>NO ID FOUND</h1>";
//     }

// })->whereNumber('id');
// })->whereAlpha('id');
// })->whereAlphaNumeric('id');
// })->whereIn('id', ['movie','song','painting']);
// })->where('id', '[0-9]+');
// })->where('id', '[a-za-Z]+');

// // multi parameter val

// Route::get('/post/{id?}/comment/{comment?}', function (string $id = null, string $comment = null) {

//     if($id){
//         return "<h1>Post Page ID : ".$id."</h1><h2>".$comment."</h2>";
//     }else{
//         return "<h1>NO ID FOUND</h1>";
//     }

// })->where('id', '[0-9]+')->->where('comment', '[a-za-Z]+');


// regex: 
// for numbers only '[0-9]+',
// for alphabetic only '[a-za-Z]+' 

?>

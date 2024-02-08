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

Route::get('/', function () {
    return view('welcome');
    // return "<h1>Post Page</h1>";
});

Route::get('/post', function () {
    return "<h1>Post Page</h1>";
});


// php artisan route:list --except-vendor [to see only outes you made]
// php artisan route:list --path=post [to see only post routes you made]

?>

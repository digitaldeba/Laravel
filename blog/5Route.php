<?php
// https://github.com/digitaldeba/Laravel/blob/master/blog/3InstallLaravelAnd.html
// after istallation go to views and route these:
// blog\resources\views\welcome.blade.php
// blog\routes\web.php
// -------------------
// get:
// ----
Route::get('/', function () {
    return view('welcome');
});

// Route::view('/', 'welcome');

Route::view('/blogs', 'post');
?>

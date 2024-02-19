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


//* regex: 
// for numbers only '[0-9]+',
// for alphabetic only '[a-za-Z]+' 


// // namespace

// Route::get('/post', function () {
//     return view('post');
// })->name('mypost');

// // * at view pages for href =>
// // <a href="{{ route('mypost') }}">my post</a>


// Route::redirect('/blogs','/post', 301);

// // *301 for search engine directory communication optional for the base feature

// // route groups

// Route::prefix('page')->group(function(){

//     Route::get('/post', function () {
//         return view('post');
//     })->name('mypost');

//     Route::get('/breeze', function () {
//         return view('breeze');
//     });

// });

// // *  now the urls will be => page/post | post/breeze

// // for page not found redirection

// Route::fallback(function(){
//     return "<h1>page not found</h1>";
// });

// ------------------- vid-12 -------------


// // send value in route
// // at view page
// <ol>
//     <li>{{ $user }}</li>
//     <li>{{ $user2 }}</li>
//     <li>{{ !empty($user3) ? $user3 : 'no user3' }}</li>
//     <li>{!! $user3 !!}</li>
// </ol>

// Route::get('/breeze', function () {
//     $bname = "raghav";

//     return view('breeze', [
//         'user' => $bname,
//         'user2' => 'bname',
//         'user4' => '',
//         'user3' => '<script>alert("Hakuna mata ta")</script>'
//     ]);

//     // return view('breeze')
//     // ->with('user',$bname)
//     // ->with('user2','bname')
//     // ->with('user3','cname');

//     // return view('breeze')
//     // ->withUser($bname)
//     // ->withUser2('bname')
//     // ->withUser3('cname');


//     
// });

// ------------------- to send array -------------


// // send value in route
// // at view page

// @foreach ($user as $id => $u)

//     <h1>{{ $id }} {{ $u['name'] }} | {{ $u['phone'] }} | {{ $u['city'] }}</h1>
//     |  <a href="{{ route('view.user', $id) }}">Show</a>

// @endforeach


// Route::get('/breeze', function () {

//       $names = [

//      1 => ['name' => 'Amitabh', 'phone' =>'9123456789', 'city'=>'Goa'],
//      2 => ['name' => 'Salman', 'phone' =>'9123456789', 'city'=>'Delhi'],
//      3 => ['name' => 'Sunny', 'phone' =>'9123456789', 'city'=>'Mumbai'],
//      4 => ['name' => 'Akshay', 'phone' =>'9123456789', 'city'=>'Agra']

//      ];
  
//     return view('breeze', ['user' => $names]);

    
// });

// Route::get('/user/{id}', function($id){
//     return "<h1>User : ". $id ."</h1>";
// })->name('view.user');



?>

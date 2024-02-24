<?php
// // ------- to make ontroller --------
// php artisan make:controller PageController


// // ------- to avail it for page ------

// // at controller('PageController.php') write below method inside the controller
// class PageController extends Controller
// {
//     //
//     public function showHome(){
//         return view('welcome');
//     }

//     //
//     public function showUser(string $id){
//     // return view('user', ['id' => $id]);

//     // if key and value is same, use compact function
//     return view('user', compact('id')); 
//     }
// }


// at web.php incllude path of conren contoller('PageController') & target it to oncern page('/')
// Route::get('/', [PageController::class, 'showHome'])->name('home');
// Route::get('/user/{id?}', [PageController::class, 'showUser'])->name('myUser');


// // at user.blade.php
// <h1>{{ !empty($id) ? $id : 'no id found' }}</h1>



?>

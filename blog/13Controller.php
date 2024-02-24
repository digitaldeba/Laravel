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
//     public function showUser(string $id = null){
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

// -------- for group controller-----------


//      Route::controller(PageController::class)->group(function(){

//          Route::get('/', 'showHome')->name('home');
//          Route::get('/post', 'showBlog')->name('blog');
//          Route::get('/user/{id?}', 'showUser')->name('myUser');

//      });

// // at view pages change href route to relevant names'

// <li class="nav-item"><a href="{{ route('blog') }}" class="navlink">Post</a></li>



// // ---------- for single action controller (uses like constructor) ----------
// php artisan make:controller TestingController --invokable


// // at web.php
// Route::get('/testing', TestingController::class);


// // at TestingController.php
// class TestingController extends Controller
// {
//     /**
//      * Handle the incoming request.
//      */
//     public function __invoke()
//     {
//         //
//         return view('test');
//     }
// }


// // make a test.blade.php page | invoke method can be called in normal controller also


// // -------- to see which route is targetted to which controller --------
// php artisan route:list --except-vendor
// // -------- want to look for specific route { name  with user }--------
// php artisan route:list --path=user

?>

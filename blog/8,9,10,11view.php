<?php

// blade syntext
//print string
// {{ "<h1>home : user 1</h1>" }}
// {{ "<h1>home : user 1</h1>" }}
// * add @ a the starting ex- @{{ $user }}

// print html :
// <h1>home : user 1</h1>
// {!! "<h1>home : user 1</h1>" !!}

// js
// {!! <script>"<h1>home : user 1</h1>" !!</script>}

// comment statement
// {{-- --}} 

// varriable define
// @php
//     $user = "cleopatra";
//     $names = ["bumba", "jane", "gopon", "golpoti"];
// @endphp
// {{ $user }}

// foreach
// <ul>
// @foreach($names as $n)
// <li>{{ $n }}</li>
// @endforeach
// </ul>

// loop varriable
// <ul>
// @foreach ($names as $n)
//     @if( $loop->first )
//         <li style="color: red;">{{$n}}</li>
//     @elseif( $loop->last )
//         <li style="color: green;">
//             iteration - {{$loop->iteration}} index - {{$loop->index+1}} <span>of</span> count - {{$loop->count}} {{$n}}
//         </li>
//     @else
//         <li>{{$n}}</li>
//     @endif
// @endforeach

// @foreach ($names as $n)
//     @if( $loop->even )
//         <li style="color: red;">{{$n}}</li>
//     @elseif( $loop->odd )
//         <li style="color: green;">
//             iteration - {{$loop->iteration}} index - {{$loop->index+1}} <span>of</span> count - {{$loop->count}} {{$n}}
//         </li>
//     @endif
// @endforeach
// </ul>

// ------vid 9---------

// @include
// \resources\views\pages\header.blade.php there write something

// @include('pages.header')

// // * can be included multiple times
 
//  pass data to header
// @include('pages.header', ['name' => 'cleopatra'])
// // go to header page and write {{ $name }}

// pass array to header (@foreach required for array)
// @php
// $nic = ['bala', 'palas', 'ritu', 'gupta'];
//  $nic2 = ['one' => 'bala', 'two' => 'palas', 'three' => 'ritu', 'four' => 'gupta'];
//   nic3 = [];
// @endphp

// @include('pages.header', ['names' => $nic])
// // * at header page
// @foreach ( $names as $n )
// {{ $n }}
// @endforeach

// @include('pages.header', ['names' => $nic2])
// // * at header page
// <ul>
// @foreach ( $names as $key => $val )
// <li>{{ $key }} - {{ $val }}</li>
// @endforeach
// </ul>

// @include('pages.header', ['names' => $nic3])
// // * at header page @forelse checks, is the array is empty and print accordingly
// <ul>
// @forelse ( $names as $key => $val )
//    <li>{{ $key }} - {{ $val }}</li>
// @empty
//     <p>no valu found</p>
// @endforelse
// </ul>

// // @includeIf checks if the page exist or not
// @includeIf('pages.contentxyzL')

// // @includeWhen(true/false, 'view file', ['status' => 'hello'])
// @includeWhen(empty($nic), 'pages.header', ['names' => 'hello'])
// @includeUnless(!empty($nic), 'pages.footer', ['names' => 'hello'])
// // * if path is     <link rel="stylesheet" href="css/style.css"> here css/style.css is the countable directtory at *public folder

// ------ vid 10 ---------

// use @yield @extends @section to include page content

// resources\views\layouts\masterlayout.blade.php | paste the structure of the website here
// after that on the relevent sections 
// @yield('content')
    // @hasSection('title')
    //     @yield( 'title' )
    // @else
    //     Website
    // @endif

// // now go to relevant sections content area's page
// @extends('layouts.masterlayout')
// @section('header')
//  -- type your content here --
// @endsection

// to show add more content dynimically within the page | usage of @show and @parent
// at resources\views\layouts\masterlayout.blade.php 
// @section('nav')
//       <ul class="menu">
//         <li class="nav-item"><a href="/" class="navlink active">Home</a></li>
//         <li class="nav-item"><a href="{{ route('mypost') }}" class="navlink">Post</a></li>
//         <li class="nav-item"><a href="/breeze" class="navlink">Breeze</a></li>
//      </ul>
// @show
// // at relevant pages
// @section('nav')
        // @parent
        // <p>silence is gold</p>
// @endsection

// to get the full directory link of assets
// <link rel="stylesheet" href="css/style.css">
// <link rel="stylesheet" href="{{asset('css/style.css')}}">

// -------------vid 11 ------------
// php in js


// @php
//     $fruit = ['mango', 'lemon', 'guava', 'berries']
// @endphp


// <script>
//     // var data = @json($fruit);
//     var data = {{ Js::from($fruit) }}


//     // console.log(data);
//     data.forEach(function(ex){
//         console.log(ex);
//     })
// </script>

// at resources\views\layouts\masterlayout.blade.php 
// @stack('scripts') | like @yield
// // at relevant page only where js script or css is needed  | unlike @section @push can be called multiple times
// @push('scripts')
//     <script src="/bs.js"></script>
//     <script src="/example.js"></script>
// @endpush

// @push('style')
//     <link rel="stylesheet" href="style.css">
// @endpush

// // targets specific named section and puts the content just before it
// @prepend('style')
//     <style>
//         body{
//             background-color: #green;
//         }
//     </style>
// @endprepend

// // to print js data on page
// @verbatin
//     <div id="app">{{ message }}</div>
// @endverbatin



?>

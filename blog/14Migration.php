<?php

// // ------------ to create migration table ------------
// php artisan make:migration create_students_table

// // that created the migrtion file

// return new class extends Migration
// {
//     /**
//      * Run the migrations.
//      */
//     public function up(): void
//     {
//         Schema::create('users', function (Blueprint $table) {

//             $table->id();
//             $table->string('name');
//             $table->string('email')->unique();
//          
//         });
//     }

//     /**
//      * Reverse the migrations.
//      */
//     public function down(): void
//     {
//         Schema::dropIfExists('users');
//     }
// };

// // ------- after designing the table structure { at env file set db name } --------
// php artisan migrate


?>

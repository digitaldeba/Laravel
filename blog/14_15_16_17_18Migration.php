<?php
// 14 laravel 11 diff explained
// ------ vid - 15 ------------
// // ------------ to create migration table ------------
// php artisan make:migration create_students_table

// // that created the migrtion file 
// // for data type | https://laravel.com/docs/10.x/migrations#available-column-types

// return new class extends Migration
// {
//     /**
//      * Run the migrations.
//      */
//     public function up(): void
//     {
//         Schema::create('users', function (Blueprint $table) {

//             $table->id();
//             $table->string('name', 30);
//             $table->string('email');
//             $table->float('percentage',3,2);
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

// // ------- after designing the table structure set db name { at env file } --------
// php artisan migrate

// // ------ to view migration table updated status -------
// php artisan migrate:status

// // * while trying to re add more table in db though migration, be aware of the existing tables in 'migrations' table of database 

// // ------ NOT RECOMMENDED : force include table in db ------- 
// php artisan migrate --force

// // ------- to remove last migration | table ----------
// php artisan migrate:rollback
// // ------- to remove last 3 migration effects --------
// php artisan migrate:rollback --step=3
// // ------- to remove all the tables by migration | not the 'migrations' table ones --------
// php artisan migrate:reset   
// // ------- to remove all the tables by migration and recreate them again | it does rollback and migrate both --------
// php artisan migrate:refresh {remove}
// php artisan migrate:fresh {drop}
// // ------- to create model and migrate at once -------
// php artisan make:model create_task_table -m
// // ------- to create model and migrate at once -------
// php artisan make:model task -m

// * while creting table through model, if named task will create tasks table

//--------------- vid-16 --------------//

// ----------- to update table | add new column / field -----------
// php artisan make:migration update_student_table --table=students

// ------- go to concern file for above command -------
//   public function up(): void
//     {
//         Schema::table('students', function (Blueprint $table) {
//             //
//             $table->string('city', 30);
//         });
//     }

// php artisan migrate

// ------ laravel modify collumn with migration ------
// $table->renameColumn('from','to');  {works only on laravel 10, MySql > 8.0.3  and MariaDB > 10.5.2}

// $table->dropColumn('city'); { to delete 1 column }
// $table->dropColumn('city','avatar','location'); { to delete multi column }
// $table->string('name',50)->change();
// $table->intiger('votes')->unsigned()->default(1)->comment('my comment')->change();

// -------- change column order | here after password collumn these 2 columns will be added ------
// $table->after('paswword',function (Blueprint $table){
//     $table->string('address',50);
//     $table->string('city',30);
// });

// -------- modify table with migration --------
// $table->rename('from','to');
// $table->drop('users');
// Schema::dropifExists('users');

// if(Schema::hasTable('users')){
//     // The "users" table exists...
//  }

// if(Schema::hasColumn('users','email')){
//     // The "users" table exists and has an "email" column...
//  }
?>

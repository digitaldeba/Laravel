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
// Schema::rename('from', 'to');

// if(Schema::hasTable('users')){
//     // The "users" table exists...
//  }

// if(Schema::hasColumn('users','email')){
//     // The "users" table exists and has an "email" column...
//  }

// -- ---------constraints and miodifier------- --

public function up(): void {
    Schema::create('students', function (Blueprint $table){
        $table->intiger('student_id');
        $table->string('name',30);
        $table->string('email')->unique()->nullable();
        $table->float('percentage',3,2)->comment('student percentage');
        $table->primary('student_id');
        $table->string('city')->default('no city');
        $table->intiger('age')->unsigned();
    });
}


//------------ vid 17 {primary, foreign key set} --------

public function up(): void {
    Schema::create('students', function (Blueprint $table){
       $table->id();;
        $table->string('name',30);
        $table->string('email')->unique()->nullable();
    });
}

// ----------after creation insert few data in students table--------

step3
php artisan make:migration carete_libraries_table

step4
public function up(): void {
    Schema::create('libraries', function (Blueprint $table){
        $table->id();
        $table->insignedBigInteger('stu_id');
        // ---- here the students table's id column is refered as foreign key 
        $table->foreign('stu_id')
              ->references('id')
              ->on('students');
              ->onUpdate('cascade');
              ->onDelete('set null');

        $table->string('book');
        $table->date('due_date')->nullable;
        $table->boolean('status');
    });
}

step4
php artisan migrate

// -----now insert some data here too----

// to unset foreign key

step1
php artisan make:migration update_library_table --table=libraries

step2
public function up(): void{
    Schema:update('libraries', function (Blueprint $table){
        $table->dropForeign(['student_id']);
    })
}

step3
php atrisan migrate:refresh


// ----------- vid 18 {seeding / inserting fake data} --------

step1
php artisan make:model student

step2
php artisan make:seeder StudentSeeder

step3
go to database/seeders/StudentSeeder.php
- here include student.php model

class StudentSeeder extends Seeder
{
    public function run(): void
    {
        student::create([
            'name' => 'radio.com';
            'email' => 'ronin@gmail.com';
        ])
    }
}

- now go to database/seeders/DatabaseSeeder.php

class Database extends Seeder
{
    public function run(); void
    {
        $this->call([
            StudentSeeder::class
        ]);
    }
}

step4
php artisan migration:refresh
php artisan db:seed


?>

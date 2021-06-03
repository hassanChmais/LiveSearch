<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameNameInGamesTable extends Migration
{

/*    composer require doctrine/dbal
    php artisan make:migration rename_gender_in_students_table --table=students
$table->renameColumn('name', 'game_name');
    */
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('games', function (Blueprint $table) {
            //
            //$table->renameColumn('name', 'game_name');
            $table->string('game_name')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('games', function (Blueprint $table) {
            //
           // $table->renameColumn('name', 'game_name');
            
        });
    }
}

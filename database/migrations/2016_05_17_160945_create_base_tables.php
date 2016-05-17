<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBaseTables extends Migration
{
    /**
     * Run the migrations.
     *
     * php artisan migrate:reset para reiniciar todas la migraciones
     *
     * @return void
     */
    public function up()
    {
		Schema::create('database_user', function(Blueprint $table){
			$table->increments('id');
			$table->string('username');
			$table->string('host');
			$table->unique(['username', 'host']);
		});

	    Schema::create('query', function(Blueprint $table){
			$table->increments('id');
		    $table->unsignedInteger('database_user_id');
		    $table->longText('statement');
		    $table->timestamp('executed_at')->default('0000-00-00 00:00:00');
		    $table->timestamp('execution_time')->default('0000-00-00 00:00:00');
		    $table->unsignedSmallInteger('lock_time');
		    $table->unsignedInteger('rows_sent');
		    $table->unsignedInteger('rows_examined');

		    $table->foreign('database_user_id')->references('id')->on('database_user');
		    $table->index('executed_at');
		    $table->index('execution_time');
		    $table->index('lock_time');
		    $table->index('rows_examined');
	    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
	    Schema::drop('query');
        Schema::drop('database_user');
    }
}

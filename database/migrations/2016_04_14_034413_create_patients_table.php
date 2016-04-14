<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Create patients table.
 *
 * @author Alexandru Bugarin <alexandru.bugarin@gmail.com>
 */
class CreatePatientsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('patients', function(Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->unsigned();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('phone_number');
            $table->date('date_of_birth');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::droIfExists('patients');
    }
}

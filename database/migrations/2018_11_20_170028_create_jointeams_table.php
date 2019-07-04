<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJointeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jointeams', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('mobileno');
            $table->string('email')->unique();
            $table->mediumText('address');
            $table->string('education');
            $table->string('skills');
            $table->mediumText('whyjoin');
            $table->string('member_image');
            $table->string('verify');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jointeams');
    }
}

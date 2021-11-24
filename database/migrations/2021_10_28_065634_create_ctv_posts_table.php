<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCtvPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ctv_posts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('title');
            $table->string('adress');
            $table->string('theme');
            $table->string('type');
            $table->string('price');
            $table->string('location');
            $table->string('content');
            $table->integer('status')->default(0);
            $table->string('image');
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
        Schema::dropIfExists('ctv_posts');
    }
}

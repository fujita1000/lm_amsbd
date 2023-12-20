<?php

// database/migrations/2023_12_17_212932_create_comments_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('thread_id');
            $table->string('name');
            $table->text('comment');
            $table->timestamps();

            $table->foreign('thread_id')->references('id')->on('threads')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
<?php

// database/migrations/xxxx_xx_xx_create_threads_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThreadsTable extends Migration
{
    public function up()
    {
        Schema::create('threads', function (Blueprint $table) {
            $table->id();
            $table->string('title', 30); // スレッドの名前（30文字以内）
            $table->text('description'); // スレッドの説明
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('threads');
    }
}
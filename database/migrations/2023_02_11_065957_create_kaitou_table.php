<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kaitou', function (Blueprint $table) {
            $table->increments("id");
            $table->string("text");
            $table->integer("はい");
            $table->integer("いいえ");
            $table->integer("どうしても答えられない・答えたくない");
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
        Schema::dropIfExists('kaitou');
    }
};

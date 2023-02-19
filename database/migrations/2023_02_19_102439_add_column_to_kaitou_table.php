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
            $table->string("text")->default("ここに質問を追加します");
            $table->integer("はい")->default("1");
            $table->integer("いいえ")->default("0");
            $table->integer("どうしても答えられない・答えたくない")->default("0");
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
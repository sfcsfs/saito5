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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->text("comment")->default("こんにちは！");
            $table->text("はいなら0いいえなら1　左からスタート現在8個")->default("00000000");
            $table->text("性別")->default("性別不詳");
            $table->integer("年齢")->default("20");
            $table->timestamps();
            $table->boolean("delete_flag")->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};

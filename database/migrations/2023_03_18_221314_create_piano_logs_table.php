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
        Schema::create('piano_logs', function (Blueprint $table) {
            $table->id();
            $table->string('username', 20); // ユーザーネーム
            $table->string('userid', 255); // ユーザーID ⇒ 追加
            $table->string('song', 255); // 曲名
            $table->string('composer', 255); // 作曲家
            $table->tinyInteger('playingage'); // 演奏時年齢
            $table->tinyInteger('difficulty'); // 難易度
            $table->tinyInteger('degree'); // 度数
            $table->tinyInteger('playingtimerp'); // 演奏時間(リピート有)
            $table->tinyInteger('playingtimenrp'); // 演奏時間(リピート無)
            $table->string('score', 255); // 使用楽譜
            $table->tinyInteger('readingperiod'); // 譜読み期間
            $table->string('exercise', 255)->nullable(); // 練習方法 ※nullableはDB直接更新
            $table->string('technique', 255)->nullable(); // テクニックポイント※nullableはDB直接更新
            $table->string('recording', 255)->nullable(); // 録音データ※nullableはDB直接更新
            $table->string('url', 255)->nullable(); // 情報サイトURL※nullableはDB直接更新
            $table->string('soundsource', 255)->nullable(); // 参考音源※nullableはDB直接更新
            $table->string('books', 255)->nullable(); // 参考書籍※nullableはDB直接更新
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
        Schema::dropIfExists('piano_logs');
    }
};

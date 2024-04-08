<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedbackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedback', function (Blueprint $table) {
            $table->id();
            $table->string("name", 20)->nullable()->comment("留言者称呼");
            // 手机号码
            $table->string("phone", 20)->nullable()->comment("手机号码");
            // 标题
            $table->string("title")->nullable()->comment("留言标题");
            // 内容
            $table->text("content")->nullable()->comment("留言内容");
            // 软删除标识字段
            $table->softDeletes();
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
        Schema::dropIfExists('feedback');
    }
}

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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            //index加索引，mysql下的搜索优化
            $table->string('name')->index()->comment('Name');
            //分类的描述为文本类型，允许字段为空；
            $table->text('description')->nullable()->comment('Description');
            $table->integer('post_count')->default(0)->comment('Post count');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
};

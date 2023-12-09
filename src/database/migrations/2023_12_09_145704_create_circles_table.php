<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCirclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('circles', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // サークル名
            $table->text('description')->nullable(); // 文言
            $table->string('instagram_link')->nullable(); // Instagram リンク
            $table->string('twitter_link')->nullable(); // Twitter リンク
            $table->string('line_link')->nullable(); // LINE リンク
            $table->string('gender_ratio')->nullable(); // 男女比
            $table->string('department_ratio')->nullable(); // 学部比
            $table->text('photos')->nullable(); // 写真のパスまたはURL
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
        Schema::dropIfExists('circles');
    }
}

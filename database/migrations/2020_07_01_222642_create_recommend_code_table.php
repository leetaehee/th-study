<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecommendCodeTable extends Migration
{
    /**
     * 추천 경로 코드 테이블 생성 (회원가입 시 필요)
     *
     * @return void
     */
    public function up()
    {
        Schema::create('th_recommend_codes', function (Blueprint $table) {
            $table->increments('recommend_id')->comment('기본키');
            $table->string('name', 30)->comment('코드명');
            $table->boolean('use_flag')->default(1)->comment('사용여부');

            $table->unique('name');

            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
        });

        // 테이블 코멘트
        DB::statement('ALTER TABLE `th_recommend_codes` COMMENT = "추천경로 테이블"');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('th_recommend_codes');
    }
}

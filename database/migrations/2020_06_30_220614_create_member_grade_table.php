<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberGradeTable extends Migration
{
    /**
     * 회원 등급 테이블 생성
     *
     * @return void
     */
    public function up()
    {
        Schema::create('th_member_grades', function (Blueprint $table) {
            $table->increments('grade_id')->comment('기본키');
            $table->string('name', 20)->comment('등급명');
            $table->tinyInteger('grade_order')->unsigned()->comment('등급순서');
            $table->boolean('active_flag')->default(0)->comment('활동여부');
            $table->integer('posts_condition')->unsigned()->default(0)->comment('게시글조건');
            $table->integer('attendance_condition')->unsigned()->default(0)->comment('출석조건');
            $table->integer('possession_condition')->unsigned()->default(0)->comment('보유스터디조건(갯수)');
            $table->integer('reward_point')->default(100)->comment('보상포인트');
            $table->boolean('use_flag')->default(1)->comment('사용여부');
            $table->string('register', 30)->comment('관리자');
            $table->dateTime('regi_date')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('등록시각');
            $table->string('modifier', 30)->nullable()->comment('수정자');
            $table->dateTime('modify_date')->nullable()->comment('수정시각');

            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
        });

        // 테이블 코멘트
        DB::statement('ALTER TABLE `th_member_grades` COMMENT = "회원등급 테이블"');

        // 데이터 수정할 경우 자동으로 시각 정보 넣어줌
        db::statement('ALTER TABLE `th_member_grades` MODIFY modify_date DATETIME ON UPDATE CURRENT_TIMESTAMP');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('th_member_grades');
    }
}

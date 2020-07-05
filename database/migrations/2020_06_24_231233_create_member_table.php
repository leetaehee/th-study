<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberTable extends Migration
{
    /**
     * 세대원 테이블 생성
     *
     * @return void
     */
    public function up()
    {
        Schema::create('th_members', function (Blueprint $table) {
            // 회원테이블
            $table->increments('member_id')->comment('기본키');
            $table->string('name', 255)->comment('이름');
            $table->string('id', 255)->unique()->comment('아이디');
            $table->string('password', 255)->comment('패스워드');
            $table->date('birth_date', 255)->comment('생년월일');
            $table->string('email', 255)->unique()->comment('이메일');
            $table->string('phone', 255)->unique()->comment('휴대폰');
            $table->char('sex', 1)->comment('성별');
            $table->string('major', 20)->comment('전공');
            $table->integer('education_id')->unsigned()->comment('최종학력');
            $table->integer('recommend_id')->unsigned()->comment('추천경로');
            $table->integer('grade_id')->unsigned()->comment('등급');
            $table->integer('point')->default(0)->comment('포인트');
            $table->boolean('approval_flag')->default(0)->comment('회원가입승인여부');
            $table->dateTime('join_date')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('회원가입시각');
            $table->dateTime('approval_date')->nullable()->comment('회원가입승인시각');
            $table->dateTime('modify_date')->nullable()->comment('회원변동시각');
            $table->dateTime('withdrawal_date')->nullable()->comment('회원탈퇴시각');

            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
        });

        // 테이블 코멘트
        DB::statement('ALTER TABLE `th_members` COMMENT = "스터디 회원 테이블"');

        // 데이터 수정할 경우 자동으로 시각 정보 넣어줌
        db::statement('ALTER TABLE `th_members` MODIFY modify_date DATETIME ON UPDATE CURRENT_TIMESTAMP');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('th_members');
    }
}

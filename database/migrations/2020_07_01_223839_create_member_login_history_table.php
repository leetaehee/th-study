<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberLoginHistoryTable extends Migration
{
    /**
     * 로그인 이력 테이블 생성
     *
     * @return void
     */
    public function up()
    {
        Schema::create('th_member_login_historys', function (Blueprint $table) {
            $table->increments('history_id')->comment('기본키');
            $table->integer('member_id')->unsigned()->comment('회원 PK');
            $table->dateTime('login_date')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('로그인시각');
            $table->ipAddress('login_ip')->comment('로그인아이피');
            $table->string('login_agent', 255)->comment('브라우저 정보');

            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
        });

        // 테이블 코멘트
        DB::statement('ALTER TABLE `th_member_login_historys` COMMENT = "로그인기록 테이블"');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('th_member_login_historys');
    }
}

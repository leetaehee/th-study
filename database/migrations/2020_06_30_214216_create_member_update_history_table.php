<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberUpdateHistoryTable extends Migration
{
    /**
     * 회원정보 변동이력 테이블 생성
     *
     * @return void
     */
    public function up()
    {
        Schema::create('th_member_update_historys', function (Blueprint $table) {
            $table->increments('history_id')->comment('기본키');
            $table->integer('member_id')->unsigned()->comment('회원 PK');
            $table->string('update_memo', 255)->comment('변동사유');
            $table->dateTime('update_date')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('변동시각');

            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
        });

        // 테이블 코멘트
        DB::statement('ALTER TABLE `th_member_update_historys` COMMENT = "회원정보 변동이력"');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('th_member_update_historys');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberPointHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('th_member_point_historys', function (Blueprint $table) {
            $table->increments('history_id')->comment('기본키');
            $table->integer('member_id')->unsigned()->comment('회원 PK');
            $table->date('charge_date')->comment('충전일자');
            $table->string('charge_type', 255)->comment('충전방식');
            $table->integer('charge_cost')->default(0)->comment('충전금액');
            $table->boolean('expiration_flag')->default(0)->comment('만료여부');
            $table->date('expiration_date')->comment('포인트 만료일자');

            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
        });

        // 테이블 코멘트
        DB::statement('ALTER TABLE `th_member_point_historys` COMMENT = "포인트 충전 내역"');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('th_member_point_historys');
    }
}

<?php

use Illuminate\Database\Seeder;

class RecommendCodeTableSeeder extends Seeder
{
    /**
     * 추천경로 코드 테이블에 데이터 생성
     *
     * @return void
     */
    public function run()
    {
        $recommends = config('code.recommends');

        if (count($recommends) === 0) {
            return;
        }

        DB::table('th_recommend_codes')->truncate();

        foreach ($recommends as $key => $value) {
            DB::table('th_recommend_codes')->insert([
                [
                    'name' => $value['name'],
                    'use_flag' => $value['use_flag']
                ]
            ]);
        }
    }
}

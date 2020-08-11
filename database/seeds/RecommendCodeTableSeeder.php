<?php

use Illuminate\Database\Seeder;

/**
 * Class RecommendCodeTableSeeder 추천경로 데이터 추가 후 캐시 생성
 */
class RecommendCodeTableSeeder extends Seeder
{
    /**
     * 실행
     *
     * @return void
     */
    public function run()
    {
        $recommends = config('code.recommends');

        if (count($recommends) === 0) {
            return;
        }

        // 기존 데이터 모두 삭제
        App\RecommendCode::truncate();

        // 기존 데이터 모두 삭제
        foreach ($recommends as $key => $value) {
            App\RecommendCode::create([
                'name' => $value['name']
            ]);
        }

        // 캐시
        Cache::rememberForever('recommend_codes', function (){
            return DB::table('th_recommend_codes')->get();
        });
    }
}

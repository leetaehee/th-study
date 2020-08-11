<?php

use Illuminate\Database\Seeder;

/**
 * Class EducationCodeTableSeeder 최종학력 데이터 추가 후 캐시 생성
 */
class EducationCodeTableSeeder extends Seeder
{
    /**
     * 실행
     *
     * @return void
     */
    public function run()
    {
        $educations = config('code.educations');

        if (count($educations) === 0) {
            return;
        }

        // 기존 데이터 모두 삭제
        App\EducationCode::truncate();

        // 데이터 추가
        foreach ($educations as $key => $value) {
            App\EducationCode::create([
                'name' => $value['name']
            ]);
        }

        // 캐시
        Cache::rememberForever('eduction_codes', function (){
            return DB::table('th_education_codes')->get();
        });
    }
}
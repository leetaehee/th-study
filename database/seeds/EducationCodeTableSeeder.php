<?php

use Illuminate\Database\Seeder;

class EducationCodeTableSeeder extends Seeder
{
    /**
     * 최종학력 코드 테이블에 데이터 생성
     *
     * @return void
     */
    public function run()
    {
        $educations = config('code.educations');

        if (count($educations) === 0) {
            return;
        }

        DB::table('th_education_codes')->truncate();

        foreach ($educations as $key => $value) {
            DB::table('th_education_codes')->insert([
                [
                    'name' => $value['name'],
                    'use_flag' => $value['use_flag']
                ]
            ]);
        }
    }
}

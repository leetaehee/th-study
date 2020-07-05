<?php

use Illuminate\Database\Seeder;

class MemberGradeCodeTableSeeder extends Seeder
{
    /**
     * 등급 테이블에 데이터 생성
     *
     * @return void
     */
    public function run()
    {
        $grades = config('code.grades');

        if (count($grades) === 0) {
            return;
        }

        DB::table('th_member_grades')->truncate();

        foreach ($grades as $key => $value) {
            DB::table('th_member_grades')->insert([
                [
                    'name' => $value['name'],
                    'grade_order' => $value['grade_order'],
                    'active_flag' => $value['active_flag'],
                    'posts_condition' => $value['posts_condition'],
                    'attendance_condition' => $value['attendance_condition'],
                    'possession_condition' => $value['possession_condition'],
                    'reward_point' => $value['reward_point'],
                    'use_flag' => $value['use_flag'],
                    'register' => 'Laravel'
                ]
            ]);
        }
    }
}

<?php

use Illuminate\Database\Seeder;

/**
 * Class MemberGradeCodeTableSeeder 멤버 등급 추가 후 캐시 생성
 */
class MemberGradeCodeTableSeeder extends Seeder
{
    /**
     * 실행
     *
     * @return void
     */
    public function run()
    {
        $grades = config('code.grades');

        if (count($grades) === 0) {
            return;
        }

        // 기존 데이터 모두 삭제
        App\MemberGradeCode::truncate();

        // 데이터 추가
        foreach ($grades as $key => $value) {
            App\MemberGradeCode::create([
                'name' => $value['name'],
                'grade_order' => $value['grade_order'],
                'posts_condition' => $value['posts_condition'],
                'attendance_condition' => $value['attendance_condition'],
                'possession_condition' => $value['possession_condition'],
                'reward_point' => $value['reward_point'],
                'register' => 'Laravel'
            ]);
        }

        // 캐시
        Cache::rememberForever('member_grades', function (){
            return DB::table('th_member_grades')->get();
        });
    }
}

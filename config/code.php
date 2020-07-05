<?php
/**
 * 'grades' 등급 코드 (회원가입시 필요)
 * 'recommends' 추천경로 코드 (회원가입시 필요)
 * 'educations' 최종학력 코드 (회원가입시 필요)
 */
return [
    'grades' => [
        [
            'name' => '새내기회원',
            'grade_order' => 1,
            'active_flag' => 0,
            'posts_condition' => 0,
            'attendance_condition' => 0,
            'possession_condition' => 0,
            'reward_point' => 100,
            'use_flag' => 1
        ],
        [
            'name' => '일반회원',
            'grade_order' => 2,
            'active_flag' => 1,
            'posts_condition' => 0,
            'attendance_condition' => 0,
            'possession_condition' => 0,
            'reward_point' => 5000,
            'use_flag' => 1
        ],
        [
            'name' => '열심회원',
            'grade_order' => 3,
            'active_flag' => 1,
            'posts_condition' => 30,
            'attendance_condition' => 100,
            'possession_condition' => 0,
            'reward_point' => 25000,
            'use_flag' => 1
        ],
        [
            'name' => '우수회원',
            'grade_order' => 4,
            'active_flag' => 1,
            'posts_condition' => 1000,
            'attendance_condition' => 365,
            'possession_condition' => 1,
            'reward_point' => 50000,
            'use_flag' => 1
        ],
        [
            'name' => '초우수회원',
            'grade_order' => 5,
            'active_flag' => 1,
            'posts_condition' => 5000,
            'attendance_condition' => 700,
            'possession_condition' => 2,
            'reward_point' => 100000,
            'use_flag' => 1
        ],
        [
            'name' => 'VIP회원',
            'grade_order' => 6,
            'active_flag' => 1,
            'posts_condition' => 25000,
            'attendance_condition' => 1095,
            'possession_condition' => 3,
            'reward_point' => 150000,
            'use_flag' => 1
        ],
    ],
    'recommends' => [
        [
            'name' => '지인소개',
            'use_flag' => 1
        ],
        [
            'name' => '인터넷',
            'use_flag' => 1
        ],
        [
            'name' => '오프라인 광고',
            'use_flag' => 1
        ],
        [
            'name' => '학교',
            'use_flag' => 1
        ]
    ],
    'educations' => [
        [
            'name' => '초졸',
            'use_flag' => 1
        ],
        [
            'name' => '중졸',
            'use_flag' => 1
        ],
        [
            'name' => '고졸',
            'use_flag' => 1
        ],
        [
            'name' => '전문대졸',
            'use_flag' => 1
        ],
        [
            'name' => '대졸',
            'use_flag' => 1
        ],
        [
            'name' => '대학원졸',
            'use_flag' => 1
        ]

    ]
];
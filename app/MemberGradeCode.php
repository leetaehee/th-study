<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MemberGradeCode extends Model
{
    protected $table = 'th_member_grades';

    protected $primaryKey = 'grade_id';

    protected $guarded = ['active_flag', 'use_flag'];

    public const CREATED_AT = 'regi_date';

    public const UPDATED_AT = 'modify_date';
}

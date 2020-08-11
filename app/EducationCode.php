<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EducationCode extends Model
{
    protected $table = 'th_education_codes';

    protected $primaryKey = 'education_id';

    protected $guarded = ['use_flag'];

    public $timestamps = false;
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecommendCode extends Model
{
    protected $table = 'th_recommend_codes';

    protected $primaryKey = 'recommend_id';

    protected $guarded = ['use_flag'];

    public $timestamps = false;
}

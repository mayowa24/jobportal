<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable =[
        'company_name',
        'job_post',
        'requirements'
    ];
    //
}

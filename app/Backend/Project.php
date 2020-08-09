<?php

namespace App\Backend;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'pj_name',
        'pj_link',
        'pj_image',
        'pj_fb_link',
        'pj_gh_link',
    ];

}

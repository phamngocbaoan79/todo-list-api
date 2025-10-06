<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseTag extends Model
{
    protected $table = 'course_tag';

    protected $fillable = [
        'tag_id',
        'course_id'
    ];
}

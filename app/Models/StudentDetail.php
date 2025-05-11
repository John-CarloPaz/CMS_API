<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentDetail extends Model
{
    protected $table = 'student_details';
    protected $fillable = [
        'department_id',
        'program_id',
        'section_id',
        'year_level',
        'student_type',
        'scholarship',
        'semester_enrolled',
        'status',
        'entered_year',
        'recent_secondary_year',
        'recent_school_secondary',
        'recent_primary_year',
        'recent_school_primary',
        'recent_bachelor_year',
        'recent_school_bachelor',
        'recent_master_year',
        'recent_school_master',
        'recent_doctorate_year',
        'recent_school_doctorate',
        'user_id',
        'first_name',
        'last_name',

    ];
}

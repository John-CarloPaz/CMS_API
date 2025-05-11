<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PersonalDetail extends Model
{
    protected $table = 'personal_details';
    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'middle_name',
        'birth_date',
        'age',
        'civil_status',
        'birth_place',
        'nationality',
        'contact_number',
        'home_address',
        'email_address',
        'emergency_contact_name',
        'emergency_contact_relationship',
        'emergency_contact_number',
        'emergency_contact_address',
        'father_name',
        'father_occupation',
        'father_contact_number',
        'mother_name',
        'mother_occupation',
        'mother_contact_number',
        ];


}

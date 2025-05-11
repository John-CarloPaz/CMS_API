<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StudentAccountRegistration extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'student_id' => $this->student_id,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'department_id' => $this->department_id,
            'program_id' => $this->program_id,
            'section_id' => $this->section_id,
            'year_level' => $this->year_level,
            'student_type' => $this->student_type,
            'scholarship' => $this->scholarship,
            'semester_enrolled' => 'required|string|max:255|in:first,second,summer',
            'status' => 'required|string|max:255|in:enrolled,dropped,graduated',
            'entered_year' => 'required|integer',
            'recent_secondary_year' => 'required|integer',
            'recent_school_secondary' => 'required|string|max:255',
            'recent_primary_year' => 'required|integer',
            'recent_school_primary' => 'required|string|max:255',
            'recent_bachelor_year' => 'required|integer',
            'recent_school_bachelor' => 'required|string|max:255',
            'recent_master_year' => 'required|integer',
            'recent_school_master' => 'required|string|max:255',
            'recent_doctorate_year' => 'required|integer',
            'recent_school_doctorate' => 'required|string|max:255',
            'middle_name' => 'required|string|max:255',
            'birth_date' => 'required|integer',
            'age' => 'required|integer',
            'civil_status' => 'required|string|max:255',
            'birth_place' => 'required|string|max:255',
            'nationality' => 'required|string|max:255',
            'contact_number' => 'required|string|max:255',
            'home_address' => 'required|string|max:255',
            'email_address' => 'required|string|max:255',
            'emergency_contact_name' => 'required|string|max:255',
            'emergency_contact_relationship' => 'required|string|max:255',
            'emergency_contact_number' => 'required|string|max:255',
            'emergency_contact_address' => 'required|string|max:255',
            'father_name' => 'required|string|max:255',
            'father_occupation' => 'required|string|max:255',
            'father_contact_number' => 'required|string|max:255',
            'mother_name' => 'required|string|max:255',
            'mother_occupation' => 'required|string|max:255',
            'mother_contact_number' => 'required|string|max:255',
        ];
    }
}

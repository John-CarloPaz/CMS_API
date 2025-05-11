<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRegistrationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'department_id' => 'required|integer',
            'program_id' => 'required|integer',
            'section_id' => 'required|integer',
            'year_level' => 'required|integer',
            'type' => 'required|string|max:255|in:student,employee',
            'student_type' => 'required|string|max:255|in:regular,irregular',
            'scholarship' => 'required|string|max:255|in:academic,athletic,arts,leadership,service',
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
            'birth_date' => 'required|date',
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

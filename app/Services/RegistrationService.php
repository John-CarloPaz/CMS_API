<?php
namespace App\Services;
use App\Models\User;
use App\Models\PersonalDetail;
use App\Models\StudentDetail;
class RegistrationService
{
    public array $userData;
    public function __construct($userData)
    {
        $this->userData = $userData;
    }

    public function registerUser()
    {
        $user = new User();
        $user->first_name = $this->userData['first_name'];
        $user->last_name = $this->userData['last_name'];
        $user->type = $this->userData['type'];
        $user->password = 'CM$0000'; //Default password
        $user->save();

        return response()->json([
            'message' => 'User registered successfully',
            'data' => $user,
        ]);

    }

    public function accountRegistration()
    {
        $user = User::create([
           'first_name' => $this->userData['first_name'],
            'last_name' => $this->userData['last_name'],
            'type' => $this->userData['type'],
            'password' => 'SPCF#101'
        ]);

        $personaldetail = PersonalDetail::create([
            'user_id' => $user->id,
            'first_name' => $this->userData['first_name'],
            'last_name' => $this->userData['last_name'],
            'middle_name' => $this->userData['middle_name'],
            'birth_date' => $this->userData['birth_date'],
            'age' => $this->userData['age'],
            'civil_status' => $this->userData['civil_status'],
            'birth_place' => $this->userData['birth_place'],
            'nationality' => $this->userData['nationality'],
            'contact_number' => $this->userData['contact_number'],
            'home_address' => $this->userData['home_address'],
            'email_address' => $this->userData['email_address'],
            'emergency_contact_name' => $this->userData['emergency_contact_name'],
            'emergency_contact_relationship' => $this->userData['emergency_contact_relationship'],
            'emergency_contact_number' => $this->userData['emergency_contact_number'],
            'emergency_contact_address' => $this->userData['emergency_contact_address'],
            'father_name' => $this->userData['father_name'],
            'father_occupation' => $this->userData['father_occupation'],
            'father_contact_number' => $this->userData['father_contact_number'],
            'mother_name' => $this->userData['mother_name'],
            'mother_occupation' => $this->userData['mother_occupation'],
            'mother_contact_number' => $this->userData['mother_contact_number'],
        ]);

        $studentdetail = StudentDetail::create([
            'user_id' => $user->id,
            'first_name' => $this->userData['first_name'],
            'last_name' => $this->userData['last_name'],
            'department_id' => $this->userData['department_id'],
            'program_id' => $this->userData['program_id'],
            'section_id' => $this->userData['section_id'],
            'year_level' => $this->userData['year_level'],
            'student_type' => $this->userData['student_type'],
            'scholarship' => $this->userData['scholarship'],
            'semester_enrolled' => $this->userData['semester_enrolled'],
            'status' => $this->userData['status'],
            'entered_year' => $this->userData['entered_year'],
            'recent_secondary_year' => $this->userData['recent_secondary_year'],
            'recent_school_secondary' => $this->userData['recent_school_secondary'],
            'recent_primary_year' => $this->userData['recent_primary_year'],
            'recent_school_primary' => $this->userData['recent_school_primary'],
            'recent_bachelor_year' => $this->userData['recent_bachelor_year'],
            'recent_school_bachelor' => $this->userData['recent_school_bachelor'],
            'recent_master_year' => $this->userData['recent_master_year'],
            'recent_school_master' => $this->userData['recent_school_master'],
            'recent_doctorate_year' => $this->userData['recent_doctorate_year'],
            'recent_school_doctorate' => $this->userData['recent_school_doctorate'],
        ]);


        return response()->json([
            'message' => 'User registered successfully',
            'data' => $user,
            'personal_details' => $personaldetail,
            'student_details' => $studentdetail,
        ]);
    }


    public function updateAccountRegistration($id)
    {
        $user = User::where('id', $id)->first();
        $user->first_name = $this->userData['first_name'];
        $user->last_name = $this->userData['last_name'];
        $user->type = $this->userData['type'];
        $user->save();

        $personaldetail = PersonalDetail::where('user_id', $user->id)->first();
        $personaldetail->first_name = $this->userData['first_name'];
        $personaldetail->last_name = $this->userData['last_name'];
        $personaldetail->middle_name = $this->userData['middle_name'];
        $personaldetail->birth_date = $this->userData['birth_date'];
        $personaldetail->age = $this->userData['age'];
        $personaldetail->civil_status = $this->userData['civil_status'];
        $personaldetail->birth_place = $this->userData['birth_place'];
        $personaldetail->nationality = $this->userData['nationality'];
        $personaldetail->contact_number = $this->userData['contact_number'];
        $personaldetail->home_address = $this->userData['home_address'];
        $personaldetail->email_address = $this->userData['email_address'];
        $personaldetail->emergency_contact_name = $this->userData['emergency_contact_name'];
        $personaldetail->emergency_contact_relationship = $this->userData['emergency_contact_relationship'];
        $personaldetail->emergency_contact_number = $this->userData['emergency_contact_number'];
        $personaldetail->emergency_contact_address = $this->userData['emergency_contact_address'];
        $personaldetail->father_name = $this->userData['father_name'];
        $personaldetail->father_occupation = $this->userData['father_occupation'];
        $personaldetail->father_contact_number = $this->userData['father_contact_number'];
        $personaldetail->mother_name = $this->userData['mother_name'];
        $personaldetail->mother_occupation = $this->userData['mother_occupation'];
        $personaldetail->mother_contact_number = $this->userData['mother_contact_number'];
        $personaldetail->save();

        $studentdetail = StudentDetail::where('user_id', $user->id)->first();
        $studentdetail->first_name = $this->userData['first_name'];
        $studentdetail->last_name = $this->userData['last_name'];
        $studentdetail->department_id = $this->userData['department_id'];
        $studentdetail->program_id = $this->userData['program_id'];
        $studentdetail->section_id = $this->userData['section_id'];
        $studentdetail->year_level = $this->userData['year_level'];
        $studentdetail->student_type = $this->userData['student_type'];
        $studentdetail->scholarship = $this->userData['scholarship'];
        $studentdetail->semester_enrolled = $this->userData['semester_enrolled'];
        $studentdetail->status = $this->userData['status'];
        $studentdetail->entered_year = $this->userData['entered_year'];
        $studentdetail->recent_secondary_year = $this->userData['recent_secondary_year'];
        $studentdetail->recent_school_secondary = $this->userData['recent_school_secondary'];
        $studentdetail->recent_primary_year = $this->userData['recent_primary_year'];
        $studentdetail->recent_school_primary = $this->userData['recent_school_primary'];
        $studentdetail->recent_bachelor_year = $this->userData['recent_bachelor_year'];
        $studentdetail->recent_school_bachelor = $this->userData['recent_school_bachelor'];
        $studentdetail->recent_master_year = $this->userData['recent_master_year'];
        $studentdetail->recent_school_master = $this->userData['recent_school_master'];
        $studentdetail->recent_doctorate_year = $this->userData['recent_doctorate_year'];
        $studentdetail->recent_school_doctorate = $this->userData['recent_school_doctorate'];
        $studentdetail->save();

        return response()->json([
            'message' => 'User updated successfully',
            'data' => $user,
            'personal_details' => $personaldetail,
            'student_details' => $studentdetail,
        ]);
    }

    public function deleteUser()
    {
        $user = User::find($this->userData['id']);
        $personaldetail = PersonalDetail::where('user_id', $user->id)->first();
        $studentdetail = StudentDetail::where('user_id', $user->id)->first();
        $user->delete();
        $personaldetail->delete();
        $studentdetail->delete();

        return response()->json([
            'message' => 'User deleted successfully',
            'program' => $user,
        ]);
    }
}

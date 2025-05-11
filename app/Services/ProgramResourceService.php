<?php
namespace App\Services;
use App\Models\Program;

class ProgramResourceService {
    public function getAllPrograms() {
        return Program::orderBy('id', 'desc')->get();
    }
    public function getProgramById($id) {
        return Program::where('id', $id)->first();
    }

    public function getProgramsByDepartmentId($departmentId) {
        return Program::where('department_id', $departmentId)->get();
    }

}

<?php
namespace App\Services;
use App\Models\Department;

class DepartmentResourceService {
    public function getAllDepartments() {
        return Department::orderBy('id', 'desc')->get();
    }

    public function getDepartmentById($id) {
        $department = Department::where('id', $id)->first();
        if (!$department) {
            return response()->json(['message' => 'no department found'], 404);
        }
        return $department;
    }
}

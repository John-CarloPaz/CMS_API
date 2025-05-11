<?php
namespace App\Services;
use App\Models\Department;
use Illuminate\Http\JsonResponse;

class DepartmentCreationService {
    public array $departmentData;
    public function __construct(array $data) {
        $this->departmentData = $data;
    }

    public function createDepartment(): JsonResponse {
        $department = new Department();
        $department->name = $this->departmentData['name'];
        $department->description = $this->departmentData['description'];
        $department->save();

        return response()->json([
            'message' => 'Department updated successfully',
            'department' => $department,
        ]);
    }

    public function updateDepartment($id): JsonResponse {
        $department = Department::where('id', $id)->first();
        $department->fill([
            'name' => $this->departmentData['name'],
            'description' => $this->departmentData['description'],
        ]);
        $department->save();

        return response()->json([
            'message' => 'Department updated successfully',
            'department' => $department,
        ]);
    }

    public function deleteDepartment($id): JsonResponse {
        $department = Department::where('id', $id)->first();
        $department->delete();

        return response()->json([
            'message' => 'Department deleted successfully',
        ]);
    }
}

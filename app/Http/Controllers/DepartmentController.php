<?php

namespace App\Http\Controllers;

use App\Services\DepartmentResourceService;
use App\Services\DepartmentCreationService;
use App\Http\Resources\DepartmentResource;
use App\Http\Requests\DepartmentRequest;

class DepartmentController extends Controller
{
    //Get
    private DepartmentResourceService $departmentRetrievalService;
    public function __construct(DepartmentResourceService $departmentRetrievalService)
    {
        $this->departmentRetrievalService = $departmentRetrievalService;
    }
    public function getAllDepartments()
    {
        return DepartmentResource::collection($this->departmentRetrievalService->getAllDepartments());
    }
    public function getDepartmentById($id)
    {
        return new DepartmentResource($this->departmentRetrievalService->getDepartmentById($id));
    }
    //Create
    public function createDepartment(DepartmentRequest $request) {
        return (new DepartmentCreationService($request->validated()))->createDepartment();
    }
    //Update
    public function updateDepartment($id, DepartmentRequest $request) {
        return (new DepartmentCreationService($request->validated()))->updateDepartment($id);
    }
    //Delete
    public function deleteDepartment($id) {
        return (new DepartmentCreationService([]))->deleteDepartment($id);
    }
}

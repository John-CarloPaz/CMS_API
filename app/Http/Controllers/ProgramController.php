<?php

namespace App\Http\Controllers;

use App\Services\ProgramResourceService;
use App\Services\ProgramCreationService;
use App\Http\Resources\ProgramResource;
use App\Http\Requests\ProgramRequest;
class ProgramController extends Controller
{
    private ProgramResourceService $programRetrievalService;
    public function __construct(ProgramResourceService $programRetrievalService)
    {
        $this->programRetrievalService = $programRetrievalService;
    }

    public function createProgram(ProgramRequest $request) {
        return (new ProgramCreationService($request->validated()))->createProgram();
    }

    public function updateProgram($id, ProgramRequest $request) {
        return (new ProgramCreationService($request->validated()))->updateProgram($id);
    }
    public function deleteProgram($id) {
        return (new ProgramCreationService([]))->deleteProgram($id);
    }
    public function getAllPrograms()
    {
        return ProgramResource::collection($this->programRetrievalService->getAllPrograms());
    }
    public function getProgramById($id)
    {
        return new ProgramResource($this->programRetrievalService->getProgramById($id));
    }

    public function getProgramsByDepartmentId($departmentId)
    {
        return ProgramResource::collection($this->programRetrievalService->getProgramsByDepartmentId($departmentId));
    }
}

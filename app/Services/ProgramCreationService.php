<?php
namespace App\Services;
use App\Models\Program;
use Illuminate\Http\JsonResponse;

class ProgramCreationService {
    public array $programData;
    public function __construct(array $data) {
        $this->programData = $data;
    }

    public function createProgram(): JsonResponse {
        $program = new Program();
        $program->department_id = $this->programData['department_id'];
        $program->code = $this->programData['code'];
        $program->abbreviation = $this->programData['abbreviation'];
        $program->description = $this->programData['description'];
        $program->program_type = $this->programData['program_type'];
        $program->save();

        return response()->json([
            'message' => 'Program created successfully',
            'program' => $program,
        ]);
    }

    public function updateProgram($id): JsonResponse {
        $program = Program::where('id', $id)->first();
        $program->fill([
            'department_id' => $this->programData['department_id'],
            'code' => $this->programData['code'],
            'abbreviation' => $this->programData['abbreviation'],
            'description' => $this->programData['description'],
            'program_type' => $this->programData['program_type'],
        ]);
        $program->save();

        return response()->json([
            'message' => 'Program updated successfully',
            'program' => $program,
        ]);
    }

    public function deleteProgram($id): JsonResponse {
        $program = Program::where('id', $id)->first();
        $program->delete();

        return response()->json([
            'message' => 'Program deleted successfully',
        ]);
    }
}

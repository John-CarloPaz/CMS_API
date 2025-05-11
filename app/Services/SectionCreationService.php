<?php
namespace App\Services;
use App\Models\Section;
use Illuminate\Http\JsonResponse;

class SectionCreationService {
    public array $sectionData;
    public function __construct(array $data) {
        $this->sectionData = $data;
    }

    public function createSection(): JsonResponse {
        $section = new Section();
        $section->department_id = $this->sectionData['department_id'];
        $section->program_id = $this->sectionData['program_id'];
        $section->section_name = $this->sectionData['section_name'];
        $section->save();

        return response()->json([
            'message' => 'Section created successfully',
            'section' => $section,
        ]);
    }

    public function updateSection($id): JsonResponse {
        $section = Section::where('id', $id)->first();
        $section->fill([
            'department_id' => $this->sectionData['department_id'],
            'program_id' => $this->sectionData['program_id'],
            'description' => $this->sectionData['section_name'],
        ]);
        $section->save();

        return response()->json([
            'message' => 'Section updated successfully',
            'section' => $section,
        ]);
    }

    public function deleteSection($id): JsonResponse {
        $section = Section::where('id', $id)->first();
        $section->delete();

        return response()->json([
            'message' => 'Section deleted successfully',
        ]);
    }
}

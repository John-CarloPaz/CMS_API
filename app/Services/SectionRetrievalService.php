<?php
namespace App\Services;
use App\Models\Section;

class SectionRetrievalService
{
    public function getAllSections()
    {
        return Section::orderBy('id', 'desc')->get();
    }

    public function getSectionById($id)
    {
        $section = Section::where('id', $id)->first();
        if (!$section) {
            return response()->json(['message' => 'no section found'], 404);
        }
        return $section;
    }
}

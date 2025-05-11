<?php

namespace App\Http\Controllers;
use App\Http\Requests\SectionRequest;
use App\Services\SectionCreationService;
use App\Services\SectionRetrievalService;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    private SectionRetrievalService $sectionRetrievalService;
    public function __construct(SectionRetrievalService $sectionRetrievalService)
    {
        $this->sectionRetrievalService = $sectionRetrievalService;
    }

    public function getAllSections()
    {
        return $this->sectionRetrievalService->getAllSections();
    }
    public function getSectionById($id)
    {
        return $this->sectionRetrievalService->getSectionById($id);
    }
    public function createSection(SectionRequest $request)
    {
        return (new SectionCreationService($request->all()))->createSection();
    }
    public function updateSection(SectionRequest $request, $id)
    {
        return (new SectionCreationService($request->all()))->updateSection($id);
    }
    public function deleteSection($id)
    {
        return (new SectionCreationService([]))->deleteSection($id);
    }
}

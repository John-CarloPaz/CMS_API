<?php

namespace App\Http\Controllers;
use App\Http\Requests\RegistrationRequest;
use App\Http\Requests\StudentRegistrationRequest;
use App\Services\RegistrationService;
use App\Services\UserRetrievalService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private UserRetrievalService $userRetrievalService;
    public function __construct(UserRetrievalService $userRetrievalService)
    {
        $this->userRetrievalService = $userRetrievalService;
    }

    public function getAllUsers()
    {
        return $this->userRetrievalService->getAllUsers();
    }

    public function registerUser(RegistrationRequest $request): \Illuminate\Http\JsonResponse
    {
        return (new RegistrationService($request->validated()))->registerUser();
    }

    public function accountRegistration(StudentRegistrationRequest $request): \Illuminate\Http\JsonResponse
    {
        return (new RegistrationService($request->validated()))->accountRegistration();
    }

    public function getUserById($id)
    {
        return $this->userRetrievalService->getUserById($id);
    }

    public function updateUser($id, RegistrationRequest $request): \Illuminate\Http\JsonResponse
    {
        return (new RegistrationService($request->validated()))->updateAccountRegistration($id);
    }
}

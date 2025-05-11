<?php
namespace App\Services;
use App\Models\User;

class UserRetrievalService
{
    public function getAllUsers()
    {
        return User::orderBy('id', 'desc')->get();
    }

    public function getUserById($id)
    {
        $user = User::where('id', $id)->first();
        if (!$user) {
            return response()->json(['message' => 'no user found'], 404);
        }
        return $user;
    }


}

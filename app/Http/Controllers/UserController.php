<?php

namespace App\Http\Controllers;

use App\Models\Lecture;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserController extends Controller
{
    public function store(Request $request): JsonResource
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        $user = User::query()->create($validated);
        return JsonResource::make($user);
    }

    public function getAllUsers(): JsonResponse
    {
        $users = User::all();
        return response()->json($users);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Permissions_Users;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
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

    public function displayUserPermissions(int $id): AnonymousResourceCollection
    {
        $userPermissions = Permissions_Users::query()
            ->where('user_id', '=', $id)
            ->join('permissions', 'permissions.id', '=', 'permissions__users.permission_id')
            ->select('permissions__users.permission_id', 'permissions.name')
            ->groupBy('permissions__users.permission_id', 'permissions.name')
            ->get()
            ->toArray();
        return JsonResource::collection($userPermissions);
    }
}

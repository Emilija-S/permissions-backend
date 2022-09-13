<?php

namespace App\Http\Controllers;

use App\Models\Permissions_Users;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PermissionsUsersController extends Controller
{
    public function store(Request $request): JsonResource
    {
        $validated = $request->validate([
            'user_id' => 'required',
            'permission_id' => 'required',
        ]);

        $permission_user = Permissions_Users::query()->create($validated);
        return JsonResource::make($permission_user);
    }
}

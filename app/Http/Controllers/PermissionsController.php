<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Permission;

class PermissionsController extends Controller
{

    public function index()
    {
        $permissions = Permission::all();
        return view('role-permission.permissions.index', compact('permissions'));
    }

    public function create()
    {
        return view('role-permission.permissions.create');
    }

    public function store(Request $request)
    {
        $rules = [
            'permission_name' => 'required|string|unique:permissions,name',
        ];

        $messages = [
            'permission_name.required' => 'Permission Name Field is Blank ! Try Again',
            'permission_name.unique' => 'Permission Name already exists ! Try Again',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->errors()], 422);
        }

        $permission = Permission::create([
            'name' => $request->permission_name,
        ]);

        return response()->json(['success' => true, 'permission' => $permission], 200);
    }

    public function destroy($permissionId)
    {
        try {
            $permission = Permission::findOrFail($permissionId);
            $permission->delete();
            return response()->json(['success' => true, 'permission' => $permission, 'message' => 'Permission deleted successfully']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Failed to delete permission'], 500);
        }
    }
}

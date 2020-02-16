<?php

namespace App\Http\Controllers;

use App\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    protected $role;

    public function __construct(Role $role)
    {
        $this->role = $role;
    }

    public function index()
    {
        $roles = $this->role->paginateBy(5);

        return view('modules.roles.index', compact('roles'));

    }

    public function store(Request $request)
    {
        $this->role->saveData($request->all());
        $roles = $this->role->paginateBy(5);
        $roles->setPath('/roles');

        return view('modules.roles.table', compact('roles'));

    }

    public function edit($id)
    {
        $role = $this->role->findBy($id);

        return response()->json([
            'status_code' => 200,
            'message' => 'success',
            'data' => $role
        ], 200);
    }

    public function update(Request $request, $id)
    {
        $this->role->updateData($request->all(), $id);
        $role = $this->role->findBy($id);

        return response()->json([
            'status_code' => 200,
            'message' => 'success',
            'data' => $role
        ], 200);
    }

//    public function destroy($id)
//    {
//        $ids = explode(',', $id);
//        $this->role->deleteData($ids);
//        $roles = $this->role->paginateBy(5);
//        $roles->setPath('/roles');
//
//        return view('modules.roles.table', compact('roles'));
//    }
//
    public function search($query)
    {
        $roles = $this->role->search($query);

        return view('modules.roles.table', compact('roles'));
    }
//
//    public function showPermissionsByRole($id)
//    {
//        $permissions = $this->permission->getAll();
//        $role = $this->role->findBy($id);
//        $permissionByRole = $role->permissions()->get();
//        $data = [];
//        foreach ($permissionByRole as $item) {
//            $permissionsOfRoleById = $item->id;
//            array_push($data, $permissionsOfRoleById);
//        }
//
//        return view('models.roles.permission', compact('permissions','data'));
//    }
//
//    public function setPermissionsForRole($roleId, $permissionIds)
//    {
//        $ids = explode(',', $permissionIds);
//        $role = $this->role->findBy($roleId);
//        $role->permissions()->sync($ids);
//
//        return response()->json([
//            'status_code' => 200,
//            'message' => 'success',
//            'data' => $role
//        ], 200);
//    }
}

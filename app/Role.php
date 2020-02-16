<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';
    protected $fillable = ['role_name', 'role_label', 'role_status', 'role_level'];
    public $timestamps = true;

//    public function permissions()
//    {
//        return $this->belongsToMany('App\Permission', 'permission_role', 'role_id', 'permission_id');
//    }

    public function getAll()
    {
        return $this->all();
    }

    public function paginateBy($limit = 15)
    {
        return $this->where('role_level', 1)->orderBy('id', 'DESC')->paginate($limit);
    }

    public function search($query)
    {
        return $this->where('role_level',1)->where('role_label', 'like', '%' . $query . '%')->orderBy('id', 'DESC')->paginate(10);
    }

    public function saveData(array $data)
    {
        return $this->create([
            'role_name' => $data['name'],
            'role_label' => $data['label'],
            'role_level' => 1,
            'role_status' => $data['status']
        ]);
    }

    public function deleteData(array $ids)
    {
        return $this->destroy($ids);
    }

    public function findBy($id)
    {
        return $this->findOrFail($id);
    }

    public function updateData(array $data, $id)
    {
        return $this->findOrFail($id)->update([
            'role_name' => $data['name'],
            'role_label' => $data['label'],
            'role_level' => 1,
            'role_status' => $data['status'],
        ]);
    }

}

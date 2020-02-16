<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    public $timestamps = true;
    protected $table = 'permissions';
    protected $fillable = [
        'permission_name',
        'permission_label',
    ];

    public function roles()
    {
        return $this->belongsToMany('App\Role', 'permission_role', 'permission_id', 'role_id');
    }

    public function getAll()
    {
        return $this->all();
    }
}

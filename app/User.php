<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Role;
use App\Models\Permission;
use Illuminate\Support\Facades\DB;
use App\Notifications\ResetPassword;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPassword($token));
    }

    public function roles(){
        return $this->belongsToMany(Role::class);
    }

    public function permissions(){
        $id = $this->id;

        $permissions = DB::table('users')
            ->join('role_user', 'users.id', '=','role_user.user_id')
            ->join('roles', 'roles.id', '=','role_user.role_id')
            ->join('permissions', 'permissions.role_id', '=','roles.id')
            ->select('permissions.name as permission')
            ->where('users.id', '=', $id)
            ->distinct()
            ->get();
        return $permissions;
    }

    public function hasPermission($permission){
        $id = $this->id;
        
        $permissions = DB::table('users')
            ->join('role_user', 'users.id', '=','role_user.user_id')
            ->join('roles', 'roles.id', '=','role_user.role_id')
            ->join('permissions', 'permissions.role_id', '=','roles.id')
            ->select('permissions.name as permission')
            ->where('users.id', '=', $id)
            ->where('permissions.name', '=', $permission)
            ->distinct()
            ->get();
        $permissions = count($permissions);
        return ($permissions > 0 || $id == 1);
    }

}

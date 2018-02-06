<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\User;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->only('dashboard');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        return view('home');
    }

    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->paginate(4);
        return view('index', compact('posts'));
    }

    public function post($id)
    {
        $post = Post::with('user')->find($id);
        return view('post', compact('post'));
    }

    public function test(){
        $users = DB::table('users')
            ->join('role_user', 'users.id', '=','role_user.user_id')
            ->join('roles', 'roles.id', '=','role_user.role_id')
            ->join('permissions', 'permissions.role_id', '=','roles.id')
            ->select('users.*', 'roles.name as role', 'permissions.name as permission')
            ->where('users.id', '=', 2)
            ->get();
        /* $users = DB::table('users')
            ->join('role_user', 'users.id', '=','role_user.user_id')
            ->select('users.*', 'role_user.user_id', 'role_user.role_id')
            ->get(); */
        $sql = DB::select('
            SELECT
                u.name as username,
                u.email as email,
                r.name as role,
                p.name as permission
            FROM
                users u, role_user ru, roles r, permissions p
            WHERE
                u.id = ru.user_id AND ru.role_id = r.id AND r.id = p.role_id 
        ');
        
        dd($users);
        //dd($sql);
    }
    public function perfil(){
        return view('profile');
    }

}

<?php

namespace App\Http\Controllers\Backend;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Group_permission;
use App\Models\ModelHasPermissions;
use App\Models\Post;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Hash;
use Auth;

class AdminController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function __construct()
    {
        $this->middleware('role:admin|writer');
    }

    /**
     * dashboard
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $countPost = Post::all()->count();
        $countCategory = Category::all()->count();
        $countComment = Comment::all()->count();
        $countUser = User::all()->count();
        return view('backend.index', compact('countUser', 'countPost', 'countComment', 'countCategory'));
    }
}

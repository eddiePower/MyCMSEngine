<?php

namespace EddiesBlog\Http\Controllers\Backend;

//grab a instance of the blog posts model.
use EddiesBlog\Post;
use EddiesBlog\User;

class DashboardController extends Controller
{

	public function index(Post $posts, User $users)
	{
		//fetch 5 last posts ordered by latest first
		$posts = $posts->orderBy('updated_at', 'desc')->take(5)->get();

		//fetch the last 5 logins from the users model
		$users = $users->whereNotNull('last_login_at')->OrderBy('last_login_at', 'desc')->take(5)->get();

		//now return the view with the data.
		return view('backend.dashboard', compact('posts', 'users'));
	}
}
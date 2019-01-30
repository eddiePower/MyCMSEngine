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
		
		//pull logged in user location meta data. close to real if not proxy
		$user_ip = getenv('REMOTE_ADDR');
        $geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$user_ip"));
        $country = $geo["geoplugin_countryName"];
        $city = $geo["geoplugin_city"];
        $map = "https://maps.googleapis.com/maps/api/staticmap?center=" . $city . "," . $country . "&zoom=5&size=300x150&maptype=roadmap&markers=color:blue%7Clabel:L%-38.106253,145.1071067&key=AIzaSyCxgz4IHbQeMcmxhMT95vVRgBEMdCEQmO8";
		//now return the view with the data.
		return view('backend.dashboard', compact('posts', 'users', 'country', 'city', 'map'));
	}
}
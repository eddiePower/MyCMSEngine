<?php

namespace EddiesBlog\Templates;

use Carbon\Carbon;
use EddiesBlog\Post;
use Illuminate\View\View;

class HomeTemplate extends AbstractTemplate
{
	protected $view = 'home';

	protected $posts;

	public function __construct(Post $posts)
	{
		$this->posts = $posts;
	}

	public function prepare(View $view, array $parameters)
	{
		$posts = $this->posts->with('author')->where('published_at', '<', Carbon::now())
											 ->orderBy('published_at', 'desc')
											 ->take(3)->get();

		//create a view with the posts above as a viewVar.
		$view->with('posts', $posts);
	}

}
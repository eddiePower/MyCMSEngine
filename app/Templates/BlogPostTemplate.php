<?php

namespace EddiesBlog\Templates;

use Carbon\Carbon;
use EddiesBlog\Post;
use Illuminate\View\View;

class BlogPostTemplate extends AbstractTemplate
{
	protected $view = 'blog.post';

	protected $posts;

	public function __construct(Post $posts)
	{
		//dd($posts);

		$this->posts = $posts;
	}

	public function prepare(View $view, array $parameters)
	{
		//dd($parameters);
		
		//grab the single post that match's the id in the parameters or routing data sent
		$post = $this->posts->where('id', $parameters['id'])->where('slug', $parameters['slug'])->first();

        $view->with('post', $post);
	}

}
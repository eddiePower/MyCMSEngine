<?php

namespace EddiesBlog\Http\Controllers;

use EddiesBlog\Page;

class PageController extends Controller
{

	//call the show page function
	public function show(Page $page, array $parameters)
	{
		$this->prepareTemplate($page, $parameters);

		return view('page', compact('page'));
	}

	//prep template - load the template path from the config
	public function prepareTemplate(Page $page, array $parameters)
	{
		$templates = config('cms.templates');

		//if the page template does not exsist or is not set
		if(!$page->template || !isset($templates[$page->template]))
		{
			//kick out of method
			return;
		}

		$template = app($templates[$page->template]);

		//name the view by grabbing the template View.
		$view = sprintf('templates.%s', $template->getView());

		//dd($parameters);
		//dd($view);
		
		if(!view()->exists($view))
		{
			return;
		}

		//get the template view ready by turning view name into 
		//view instance by passing our parameter array as well.
		$template->prepare($view = view($view), $parameters);

		$page->view = $view;

	}

}
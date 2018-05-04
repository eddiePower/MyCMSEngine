<?php

namespace EddiesBlog\Presenters;

use Lewis\Presenter\AbstractPresenter;


class UserPresenter extends AbstractPresenter
{
	public function lastLoginDifference()
	{
		//this will return the difference of last login time - now time
		// to show a nice human readable time of how long ago they were online.
		return $this->last_login_at->diffForHumans();
	}

}

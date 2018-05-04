<?php

namespace EddiesBlog\Listeners;

use Carbon\Carbon;

class UpdateLastLoginOnLogin
{
	public function handle($user, $remember)
	{
		//carbon time is stored in the correct format for the
		//database needs.
		$user->last_login_at = Carbon::now();
		$user->login_ip = $_SERVER['REMOTE_ADDR'];

		//save the user object with the new time in last_login_at
		$user->save();
	}
}
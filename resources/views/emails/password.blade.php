<!doctype html>
<html lang="en">
<head>
<title>Email to reset user password on Eddies Code Portfolio.</title>
</head>
<body>
	<p><!--H
ey Tim, This a simple laravel password reset system, and can also view user data, slightly different to how it would be set up in snapforms but its another job that wouldnt take to long to implement.  Ill catch up soon ;)
	<br /><br />
-->
	Eddie has sent you this password reset link as a demo, 
	Follow the link to reset your password: {{ route('auth.password.reset', $token) }}
	</p>
</body>
</html>

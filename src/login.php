<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/general.css"></link>
		<link rel="stylesheet" type="text/css" href="css/form.css"></link>
		<meta charset="UTF-8"></meta>
		<script src="js/login.js"></script>
		<title>
			Masuk
		</title>
	</head>
	<body>
		<form name="loginForm" action="index.php" onsubmit="return validateForm()" method="post">
			<div id="form_one_row">
				<p id="label_form" class="label">
					Username
				</p>
				<p id="label_form" class="partition">
					:
				</p>
				<input id="label_form" class="text_field" type="text" name="username"></input>
			</div>
			<div id="form_one_row">
				<p id="label_form" class="label">
					Password
				</p>
				<p id="label_form" class="partition">
					:
				</p>
				<input id="label_form" class="text_field" type="password" name="pwd"></input>
			</div>
			<div id="form_one_row">
				<input id="submit" type="submit" value="MASUK"></input>
			</div>
			<div id="form_one_row"></div>
		</form>
	</body>
</html>

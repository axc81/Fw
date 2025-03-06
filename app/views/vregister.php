<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php Flasher::flashLogin(); ?>
	<form action="<?php echo BASE_URL;?>/Register/cekUser" method="post">
		<!-- <div class="field">
			<label for="name">Name</label>
			<input type="text" name="name" id="name" value="" autocomplete="off">
		</div> -->
		<div class="field">
			<label for="username">Username</label>
			<input type="text" name="username" id="username">
		</div>
		<div class="field">
			<label for="password">Password</label>
			<input type="password" name="password" id="password">
		</div>
		<div class="field">
			<label for="password2">Input Your Password Again !</label>
			<input type="password" name="password2" id="password2">
		</div>

		<input type="submit" name="Register">
	</form>
</body>
</html>
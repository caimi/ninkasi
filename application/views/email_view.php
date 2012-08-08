<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>	
<body>
	
<div id="wrap_login">
	<div class="body">
		<?php echo validation_errors(); ?>
		<?php echo form_open('Membership/send'); ?>
			<label for="email">email</label><br>
			<input type="text" name="email"><br>
			<label for="password">key</label><br>
			<input type="password" name="key"><br>
			<input type ="submit" value="enviar">
		</form>
		<hr>
	</div>
</div>
</body>
</html>
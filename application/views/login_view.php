<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>	
<body>
	
<div id="wrap_login">
	<div class="body">
		<?php echo validation_errors(); ?>
		<?php echo form_open('authenticate'); ?>
			<label for="username"><?php echo lang('username')?></label><br>
			<input type="text" name="username"><br>
			<label for="password"><?php echo lang('password')?></label><br>
			<input type="password" name="password"><br>
			<input type ="submit" value="<?php echo lang('sendLogin')?>">
			<input type="checkbox" name=""><span><?php echo lang('rememberMe')?></span><br>
			<a href=""><?php echo lang('lostYourPassword')?></a><br>
			<span><?php echo lang('dontHaveAnAccount')?></span> <a href="registration"><?php echo lang('signUp')?></a>
		</form>
	</div>
</div>
</body>
</html>
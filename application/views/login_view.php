<html>
<head>
	
</head>	
<body>
	
<div id="wrap_login">
	<div class="body">
		<?php echo form_open('verify_login'); ?>
			<label for="username"><?php echo lang('username')?></label><br>
			<input type="text" name="username"><br>
			<label for="password"><?php echo lang('password')?></label><br>
			<input type="password" name="password"><br>
			<input type ="submit" value="<?php echo lang('sendLogin')?>">
			<input type="checkbox" name=""><span><?php echo lang('rememberMe')?></span><br>
			<a href=""><?php echo lang('lostYourPassword')?></a><br>
			<span><?php echo lang('dontHaveAnAccount')?></span> <a href=""><?php echo lang('signUp')?></a>
		</form>
	</div>
</div>
</body>
</html>
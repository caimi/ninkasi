<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>	
<body>
	
<div id="wrap_signUp">
	<div class="body">
		<div class="validation">
			<?php echo validation_errors(); ?>
		</div>
			
		<?php echo form_open('Membership/signUp'); ?>
			<label for="surname"><?php echo lang('surname')?></label><br>
			<input type="text" name="surname" value="<?php echo set_value('surname')?>"><br>
			
			<label for="lastname"><?php echo lang('lastName')?></label><br>
			<input type="text" name="lastName" value="<?php echo set_value('lastName')?>"><br>
			
			<label for="email"><?php echo lang('email')?></label><br>
			<input type="text" name="email" value="<?php echo set_value('email')?>"><br>
			
			<label for="emailConfirmation"><?php echo lang('emailConfirmation')?></label><br>
			<input type="text" name="emailConfirmation" value="<?php echo set_value('emailConfirmation')?>"><br>
			
			<label for="username"><?php echo lang('username')?></label><br>
			<input type="text" name="username" value="<?php echo set_value('username')?>"><br>
			
			<label for="password"><?php echo lang('password')?></label><br>
			<input type="password" name="password"><br>
			
			<label for="passwordConfirmation"><?php echo lang('passwordConfirmation')?></label><br>
			<input type="password" name="passwordConfirmation"><br>
			
			<input type ="submit" value="<?php echo lang('sendLogin')?>"><br>

		</form>
	</div>
</div>
</body>
</html>
<div id="wrap_login">
	<div class="body">
		<div class="error"><?php echo validation_errors(); ?></div>
		<?php echo form_open('Membership/authenticate'); ?>
			<label for="username"><?php echo lang('username')?></label><br>
			<input type="text" name="username"><br>
			<label for="password"><?php echo lang('password')?></label><br>
			<input type="password" name="password"><br>
			<input type ="submit" value="<?php echo lang('sendLogin')?>">
			<input type="checkbox" name=""><span><?php echo lang('rememberMe')?></span><br>
			<a href=""><?php echo lang('lostYourPassword')?></a><br>
			<span><?php echo lang('dontHaveAnAccount')?></span> <a href="<?php echo base_url('registration')?>"><?php echo lang('signUp')?></a>
		</form>
	</div>
</div>
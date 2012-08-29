<div id="wrap_login">
	<div class="body">
		<span><img src="1" heigh="100px" width="100px"></span>
		<div class="error"><?php echo validation_errors(); ?></div>
		<?php echo form_open('Membership/authenticate'); ?>
			<label for="username"><?php echo lang('username')?></label><br>
			<input type="text" name="username" class="loginPassword" value=<?php echo set_value('username')?>	><br>
			<label for="password"><?php echo lang('password')?></label><br>
			<input type="password" name="password" class="loginPassword"><br>
			<input type ="submit" value="<?php echo lang('sendLogin')?>" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">
			<input type="checkbox" name=""><span><?php echo lang('rememberMe')?></span><br>
			<a href=""><?php echo lang('lostYourPassword')?></a><br>
			<span><?php echo lang('dontHaveAnAccount')?></span> <a href="<?php echo base_url('registration')?>"><?php echo lang('signUp')?></a>
		</form>
		<a href="" class="bt-blue sideB">enviar</a>
	</div>
</div>
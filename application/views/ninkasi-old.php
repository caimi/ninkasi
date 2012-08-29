<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>includes/ninkasi.css" />
	<link href='http://fonts.googleapis.com/css?family=Capriola' rel='stylesheet' type='text/css'>
	<link type="text/css" href="<?php echo base_url();?>includes/css/main-theme/jquery-ui-1.8.22.custom.css" rel="stylesheet" />
	<script type="text/javascript" src="<?php echo base_url();?>includes/js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>includes/js/jquery-ui-1.8.22.custom.min.js"></script>
</head>	
<body>
	<div id="main-wrap">		
		<div id="header"><?php include 'header.php'?></div>
		
		<div id="sidebar">
			<div id="mainBar">
				<ul>
					<li><a href=""><img src="<?php echo base_url();?>includes/ui-perfil.png" class="ui-perfil"></a><span>usuário</span></li>
					<li><a href=""><img src="<?php echo base_url();?>includes/ui-perfil.png" class="ui-perfil"></a><span>receitas</span></li>
					<li><a href=""><img src="<?php echo base_url();?>includes/ui-perfil.png" class="ui-perfil"></a><span>insumos</span></li>
					<li><a href=""><img src="<?php echo base_url();?>includes/ui-perfil.png" class="ui-perfil"></a><span>estilos</span></li>
					<li><a href=""><img src="<?php echo base_url();?>includes/ui-perfil.png" class="ui-perfil"></a><span>instrumentos</span></li>
					<li><a href=""><img src="<?php echo base_url();?>includes/ui-perfil.png" class="ui-perfil"></a><span>conversões</span></li>
					<li><a href=""><img src="<?php echo base_url();?>includes/ui-perfil.png" class="ui-perfil"></a><span>mensagens</span></li>
				</ul>
			</div>
			<div id="secBar">
				<div style="height: 64px; border-bottom: 1px solid #999999">Perfil</div>
				<div style="height: 40px; width: 225px">
					<ul class="tabbed">
						<li class="ativo"><a href=""><span class="icon-receita"></span></a></li>
						<li><a href="">preferências</a></li>
						<li><a href="">medidas</img></a></li>
					</ul>
				</div>
			</div>
		</div>
		
		<div id="main">
			<div style="height: 64px; border-bottom: 1px solid #999999">titulo</div>
			<div style="height: 28px; border-bottom: 1px solid #999999">barra</div>
			<div><?php echo $contents?></div>
		</div>
		<div id="footer">footer</div>
	</div>
</body>
</html>
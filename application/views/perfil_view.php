<?php include 'menu.php'?>
<div id="sec-bar">
	<div style="background-color: #e7e7e7; height: 64px; border-bottom: 1px solid #a1a1a1">
		Receitas: 12
	</div>
	<div class="tab">
		<ul>
			<li><a onclick="show_item('tabs','#tab1')"><span class="ui-img-person"></span></a></li>
			<li><a onclick="show_item('tabs','#tab2')"><span class="ui-img-gear1"></span></a></li>
			<li><a onclick="show_item('tabs','#tab3')"><span class="ui-img-email"></span></a></li>
		</ul>
		<hr width="95%">
	</div>
	<div id="tab1" class="tabs">
		<div>
			<div class="button ui-fnt">
				<ul>
					<li><a onclick="show_item('pages','#page1')"><span>dados pessoais</span></a></li>
					<li><a onclick="show_item('pages','#page2')"><span>autenticação</span></a></li>
					<li><a onclick="show_item('pages','#page3')"><span>redes</span></a></li>
				</ul>
			</div>
		</div>
	</div>
	<div id="tab2" class="tabs">
		<div class="wrap">
			aqui vai o detalhe 2<br>
			<a href="#" class="ui-link-button">enviar</a>
		</div>
	</div>
	<div id="tab3" class="tabs">
		<div class="wrap">
			aqui vai o detalhe 3
		</div>
	</div>
</div>

<div id="main-body">
	<div class="title-bar">
		<span class="page-title ui-fnt-big">Perfil</span>
		<div class="top-statistics ui-fnt-big"><a href="#" class="big-link ui-fnt-big">12</a><br>receitas</div>
		<div class="top-statistics ui-fnt-big"><a href="#" class="big-link ui-fnt-big">4</a><br>mensagens</div>
		<div class="top-statistics ui-fnt-big"><a href="#" class="big-link ui-fnt-big">10</a><br>visitas</div>
	</div>
	<div class="toolbar">
		<div class="path">perfil > configurações
		</div>
	</div>
	<div>
		<div class="main-container">
			<div id="page1" class="pages">
				<div class="error"><?php echo validation_errors(); ?></div>
				<?php echo form_open(''); ?>
					<div class="group-label"><span>Dados Pessoais</span></div>
					<div class="form-row">
						<div class="label"><label for="">nome</label></div>
						<div class="field"><input type="text"></div>
					</div>
					<div class="form-row">
						<div class="label"><label for="">sobrenome</label></div>
						<div class="field"><input type="text"></div>
					</div>
					<div class="form-row">
						<div class="label"><label for="">cep</label>ex: 88888-888</div>
						<div class="field"><input type="text"></div>
					</div>
					<div class="form-row">
						<div class="label"><label for="">rua</label></div>
						<div class="field"><input type="text"></div>
					</div>
					<div class="form-row">
						<div class="label"><label for="">cidade</label></div>
						<div class="field"><input type="text"></div>
					</div>
					<div class="form-row">
						<div class="label"><label for="">estado</label></div>
						<div class="field"><input type="text"></div>
					</div>
					<div class="group-label">
						Contatos
					</div>
					<div class="form-row">
						<div class="action-button"><a href="#"><span class="ui-img-plusb"></span></a></div>
						<div class="label"><label for="">residencial</label>ex: (41) 9999-9999</div>
						<div class="field"><input type="text"></div>
					</div>
					<div class="form-row">
						<div class="label"><label for="">comercial</label>ex: (41) 9999-9999</div>
						<div class="field"><input type="text"></div>
					</div>
					<div class="form-row">
						<div class="label"><label for="">celular</label>ex: (41) 9999-9999</div>
						<div class="field"><input type="text"></div>
					</div>
					<div class="form-row">
						<div class="label"><label for="">email</label></div>
						<div class="field"><input type="text"></div>
					</div>
					<div class="form-row">
						<div class="label"><label for="">skype</label></div>
						<div class="field"><input type="text"></div>
					</div>
					<div class="form-row">
						<div class="form-button">
							<a onclick="submit()" class="ui-link-button">enviar</a>
							<a onclick="submit()" class="ui-link-button">cancelar</a>
						</div>
					</div>
				</form>
			</div>
			<div id="page2" class="pages">
				<div class="group-label"><span>Autenticação</span></div>
				<div class="form-row">
					<div class="label"><label for="">login</label></div>
					<div class="field"><input type="text"></div>
				</div>
				<div class="form-row">
					<div class="label"><label for="">senha</label></div>
					<div class="field"><input type="text"></div>
				</div>
				<div class="form-row">
					<div class="label"><label for="">frase</label></div>
					<div class="field"><input type="text"></div>
				</div>
			</div>
		</div>
		<div class="publicidade">
			<?php include 'publicidade_view.php' ?>
		</div>	
	</div>
</div>
<div style="height: 400px; clear: both"></div>


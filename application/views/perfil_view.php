<?php include 'menu.php'?>
<div id="sec-bar">
	<div style="background-color: #e7e7e7; height: 64px; border-bottom: 1px solid #a1a1a1">
		Receitas: 12
	</div>
	<div class="tab">
		<ul>
			<li><a href="#tab1"><span class="ui-img-person"></span></a></li>
			<li><a href="#tab2"><span class="ui-img-gear1"></span></a></li>
			<li><a href="#tab3"><span class="ui-img-email"></span></a></li>
		</ul>
		<hr width="95%">
		<div id="#tab1">
			<div>
				<div class="button ui-fnt">
					<ul>
						<li><a href="#page1"></span><span>dados pessoais</span></a></li>
						<li><a href="#page2"></span><span>Sites</span></a></li>
						<li><a href="#page3"></span><span>Redes</span></a></li>
					</ul>
				</div>
			</div>
		</div>
		<div id="#tab2">
			<div class="wrap">
				aqui vai o detalhe 2<br>
				<a href="#" class="ui-link-button">enviar</a>
			</div>
		</div>
		<div id="#tab3">
			<div class="wrap">
				aqui vai o detalhe 3
			</div>
		</div>
	</div>
</div>
<div style="background-color: #e7e7e7; margin-left: 325px;">
	<div style="background-color: #e7e7e7; height: 64px; border: 1px solid #a1a1a1">
		<span style="display: inline-block; padding: 5px; color: #843121; margin: 15px;" class="ui-fnt-big">Perfil</span>
		<div style="float: right; height: 64px; width: 96px;padding-top: 16px; text-align: center"><a href="#">12</a><br>receitas</div>
		<div style="float: right; height: 64px; width: 96px;padding-top: 16px; text-align: center"><a href="#">4</a><br>mensagens</div>
		<div style="float: right; height: 64px; width: 96px;padding-top: 16px; text-align: center"><a href="#">10</a><br>visitas</div>
	</div>
	<div style="height: 32px; border-bottom: 1px solid #a1a1a1; ">
		<div style="padding-left: 10px; font-size: .7em; font-family: Helvetica; color: #666666; padding-top: 7px;">perfil > configurações
		</div>
	</div>
	<div style="display:table;">
		<div class="main-body">
			<div id="page1" class="pages">
				<div class="title"><span>Dados Pessoais</span></div>
				<div class="pagerow">
					<div class="label"><label for="">nome</label></div>
					<div class="field"><input type="text"></div>
				</div>
				<div class="pagerow">
					<div class="label"><label for="">sobrenome</label></div>
					<div class="field"><input type="text"></div>
				</div>
				<div class="pagerow">
					<div class="label"><label for="">cep</label>ex: 88888-888</div>
					<div class="field"><input type="text"></div>
				</div>
				<div class="pagerow">
					<div class="label"><label for="">rua</label></div>
					<div class="field"><input type="text"></div>
				</div>
				<div class="pagerow">
					<div class="label"><label for="">cidade</label></div>
					<div class="field"><input type="text"></div>
				</div>
				<div class="pagerow">
					<div class="label"><label for="">estado</label></div>
					<div class="field"><input type="text"></div>
				</div>
				<div class="group-label">
					Contatos
				</div>
				<div class="pagerow">
					<div class="action-button"><a href="#"><span class="ui-img-plusb"></span></a></div>
					<div class="label"><label for="">residencial</label>ex: (41) 9999-9999</div>
					<div class="field"><input type="text"></div>
				</div>
				<div class="pagerow">
					<div class="label"><label for="">comercial</label>ex: (41) 9999-9999</div>
					<div class="field"><input type="text"></div>
				</div>
				<div class="pagerow">
					<div class="label"><label for="">celular</label>ex: (41) 9999-9999</div>
					<div class="field"><input type="text"></div>
				</div>
				<div class="pagerow">
					<div class="label"><label for="">email</label></div>
					<div class="field"><input type="text"></div>
				</div>
				<div class="pagerow">
					<div class="label"><label for="">skype</label></div>
					<div class="field"><input type="text"></div>
				</div>

			</div>
		</div>
		<div class="publicidade">
			<?php include 'publicidade_view.php' ?>
		</div>	
	</div>
</div>


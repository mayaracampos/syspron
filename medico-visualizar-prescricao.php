<?php 	include("cabecalho-medico.php");
		include("conexao.php");
		include ("prescricao-funcao.php");?>
		

<div class="admin-form theme-primary mw1000 center-block" style="padding-bottom: 175px;">

      <div class="panel heading-border">

          <div class="panel-body bg-light">

            <div class="section-divider mt20 mb40">
              <span>Prescrição Médica</span>
            </div>
            <!-- Dados do médico - header -->

              <div class="content-header">
	              <p class="h5">Doutor Bla bla bla</p>
	              <p class="h5">CNPJ: 28746187246812/0001</p>
	              <p class="h5">Endereço: rua da agonia, 69</p>
              </div>


                <!-- Dados da Prescrição-->
	        <div class="col-md-15">
			<p class="h4">Prontuário:</p>
				<?echo $prontuario?>
			</div>
			<div class="col-md-15">
			<p class="h4">Número da Prescrição:</p>
				<?echo $id?>
			</div>
			<div class="col-md-15">
				<p class="h4">Nome:</p>
				<?echo $nome?>
			</div>
			<div class="col-md-15">
				<p class="h4">Endereço:</p>
				<?echo $endereco?>
			</div>
			<div class="col-md-15">
				<p class="h4">Idade:</p>
				<?echo $idade?>
			</div>
			<div class="col-md-15">
				<p class="h4">Medicação:</p>
				<?echo $medicacao?>	
			</div>
			<div class="col-md-15">
				<p class="h4">Modo de Uso:</p>
				<?echo $metodo?>	
			</div>
			<div class="col-md-15">
				<p class="h4">Quantidade:</p>
				<?echo $quantidade?>	
			</div>
			<div class="col-md-15">
			    <p class="h4">Obervação:</p>
			    <?echo $observacao?>
			</div>
			<div class="col-md-15">
			    <p class="h4">Data da Prescrição:</p>
			    <?echo $data?>
			</div>
			<div class="col-md-15">
			    <p class="h4">Médico:</p>
			    <?echo $nome_medico?>
			</div>
			<div class="col-md-15">
			    <p class="h4">CRM:</p>
			    <?echo $crm?>
			</div>
		</div>
	</div>
</div>

</html>
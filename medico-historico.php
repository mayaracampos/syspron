<?php 	include("cabecalho-medico.php");
		include("conexao.php");
		include ("prescricao-funcao.php");?>	


	
	  <div class="panel" id="spy5">
            <div class="panel-heading">
              <span class="panel-title">
                <span class="fa fa-table"></span>Histórico de Prescrições criadas</span>
              <div class="pull-right hidden-xs">
   
              </div>
            </div>
            <div class="panel-body pn">
              <div class="bs-component">
                <table class="table table-striped">

                  <thead>
                    <tr>
                      <th>Data</th>
                      <th>Número do Prontuário</th>
                      <th>Nome do Paciente</th>
                      <th>Ação</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
					$prescricoes = listaPrescricoes($con);
					foreach($prescricoes as $prescricao){
					?>
                    <tr>
					<td><?php echo $prescricao['data']?></td>
					<td><?php echo $prescricao['prontuario']?></td>
					<td><?php echo $prescricao['nome']?></td>
					<td>
                          <a href="medico-visualizar-prescricao.php"button type="button" class="btn btn-info btn-sm fs12" data-container="body" data-toggle="popover" data-placement="left" title="Popover Title" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                           Visualizar
                          </button>
                        </td>
                    </tr> 
                    <?php }?>
                </table>
              </div>
            </div>
          </div>
	
	

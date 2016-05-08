<html>
<body>
<?php include("cabecalho-medico")?>
            

            <!-- Prescrição Médica -->
            <div class="admin-form theme-primary mw1000 center-block" style="padding-bottom: 175px;">

              <div class="panel heading-border">

                <form action="adiciona-prescricao.php" method="POST" id="prescricao-formulario">

                  <div class="panel-body bg-light">

                    <div class="section-divider mt20 mb40">
                      <span> Criação de Prescrição médica Online</span>
                    </div>
                    <!-- Dados do médico - header -->

                      <div class="content-header">
                      <p class="h4">Doutor Bla bla bla</p>
                      <p class="h5">CNPJ: 28746187246812/0001</p>
                      <p class="h5">Endereço: rua da agonia, 69</p>
                      </div>
                    <!-- Dados do Usuário-->
                    <div class="section row" id="paciente00">
                      <div class="col-md-15">
                        <label for="Número da Prescrição" class="field prepend-icon">
                          <input type="text" name="id" id="id" class="gui-input" placeholder="Número da Prescrição">
                          <label for="id" class="field-icon">
                            <i class="fa fa-user"></i>
                          </label>
                        </label>
                      </div>
                      </div>
                    
                      <div class="section row" id="paciente0">
                      <div class="col-md-15">
                        <label for="Prontuario do Paciente" class="field prepend-icon">
                          <input type="text" name="prontuario" id="prontuario" class="gui-input" placeholder="prontuario do paciente">
                          <label for="prontuario" class="field-icon">
                            <i class="fa fa-user"></i>
                          </label>
                        </label>
                      </div>
                      </div>

                    <div class="section row" id="paciente1">
                      <div class="col-md-15">
                        <label for="Nome do Paciente" class="field prepend-icon">
                          <input type="text" name="nome" id="nome" class="gui-input" placeholder="Nome do paciente">
                          <label for="nome" class="field-icon">
                            <i class="fa fa-user"></i>
                          </label>
                        </label>
                      </div>
                      </div>
                      

                      <div class="section row" id="paciente2">
                      <div class="col-md-15">
                        <label for="Endereço" class="field prepend-icon">
                          <input type="text" name="endereco" id="endereco" class="gui-input" placeholder="Endereço do Paciente">
                          <label for="endereco" class="field-icon">
                            <i class="fa fa-user"></i>
                          </label>
                        </label>
                      </div>
                      </div>

                      <div class="section row" id="paciente3">
                      <div class="col-md-15">
                        <label for="Idade " class="field prepend-icon">
                          <input type="text" name="idade" id="idade" class="gui-input" placeholder="Idade do Paciente">
                          <label for="idade" class="field-icon">
                            <i class="fa fa-user"></i>
                          </label>
                        </label>
                      </div>
                      </div>
                    <!-- Fim dos dados do usuário -->

                    <!-- Dados da Medicação -->
                    <div class="section-divider mv30">
                      <span> Preencha pelo menos uma medicação </span>
                    </div>
                    <div class="row">
                      <div class="col-md-15">
                        <div class="section">
                          <label class="field select">
                            <select id="medicacao" name="medicacao">
                              <option value="">Selecione uma medicação</option>
                              <option value="BUS">Buscopan</option>
                              <option value="DIP">Dipirona</option>
                            </select>
                            <i class="arrow"></i>
                          </label>
                        </div>



                      <div class="col-md-15">
                        <div class="section">
                          <label class="field select">
                            <select id="metodo" name="metodo">
                              <option value="">Selecione um método de manipulação</option>
                              <option value="UE">Uso Externo</option>
                              <option value="UI">Uso Interno</option>
                            </select>
                            <i class="arrow"></i>
                          </label>
                        </div>
 
                      <div class="col-md-15">
                        <div class="section">
                          <label class="field select">
                            <select id="quantidade" name="quantidade">
                              <option value="">Selecione a quantidade</option>
                              <option value="50">50mg</option>
                              <option value="75">75mg</option>
                              <option value="100">100mg</option>
                              <option value="125">125mg</option>
                              <option value="150">150mg</option>
                              <option value="175">175mg</option>
                              <option value="200">200mg</option>
                              <option value="225">225mg</option>
                              <option value="250">250mg</option>
                              <option value="275">275mg</option>
                              <option value="300">300mg</option>
                              <option value="325">325mg</option>
                              <option value="350">350mg</option>
                              <option value="375">375mg</option>
                              <option value="400">400mg</option>
                              <option value="425">425mg</option>
                              <option value="450">450mg</option>
                              <option value="475">475mg</option>
                              <option value="500">500mg</option>
                            </select>
                            <i class="arrow"></i>
                          </label>
                        </div>
                      </div>
                    <!-- end section -->


                    
                      <label for="Observação" class="field prepend-icon">
                        <textarea class="gui-textarea" id="observacao" name="observacao" placeholder="Observação"></textarea>
                        <label for="observacao" class="field-icon">
                          <i class="fa fa-comments"></i>
                        </label>
                        <span class="input-footer">
                        </span>
                      </label>
                    </div>
                    <!-- end section -->
                    <div id="widget2" class="section-divider mv40">
                      </div>
                      <div class="section">
                        <label for="Data" class="field prepend-icon">
                          <input type="text" id="data" name="data" class="gui-input" placeholder="Escolha a Data">
                          <label class="field-icon">
                            <i class="fa fa-calendar-o"></i>
                          </label>
                        </label>
                      </div>

                   

                  </div>
                  <!-- end .form-body section -->
                  <div class="panel-footer text-center">
                    <button type="reset" class="button" > Cancelar </button>
                  
                 
                    <button type="submit" value="criar" class="button btn-primary" > Salvar Prescrição </button>
                   </div> 
                  </div>
                  <!-- end .form-footer section -->
                </form>
				</div>
              </div>
		
            

      
</body>
     </html>

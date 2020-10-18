<?php
//cabeçalho
include_once 'includes/header.php';
?>
 <style>
body {
  background-image: url('img/fundo.jpg');
}
</style>
<br>
<div class="container">
<div class="card-panel grey lighten-4" >
<div class="row">
  <div class="col s12 m8 push-m2">
  	<div class="row">
      <div class="col s12 m12">
      		<div align="center">
      	<h3 class="ligth">
    Cadastro de Pessoas</h3> 
    		</div>
    	</div>
    </div>
    <form action="phpaction/create.php" method="POST">
    	<div class="col s6 m12 push-m2">
    	<div class="input-field col s6">
      <label>
        <input class="with-gap" name="group1" type="radio"  />
        <span>Brasileiro</span>
      </label>
  		</div>
  		<div class="input-field col s6">
      <label>
        <input class="with-gap" name="group1" type="radio"  />
        <span>Extrangeiro</span>
      </label>
      <br>
  		</div>
  	</div>

  		
  	  <div class="input-field col s6">
        <input type="text" name="nome" id="nome">
        <label for="nome"> Nome</label>
      </div>
      <div class="input-field col s6">
        <input type="text" name="sobrenome" id="sobrenome">
        <label for="sobrenome"> Sobrenome</label>
      </div>
      <div class="input-field col s12">
        <input type="number" name="documento" id="documento">
        <label for="documento"> Nº de Documento</label>
      </div>
      <div class="input-field col s12">
        <input type="text" class="datepicker" name="nascimento">
        <label for="nascimento"> Data de Nascimento</label>
      </div>
      <div class="input-field col s12">
        <input type="text" name="endereco" id="endereco">
        <label for="morada"> Endereço de Morada?</label>
      </div>
      <div class="input-field col s12">
        <input type="text" name="familiar" id="familiar">
        <label for="morada"> Familiar mais proximo?</label>
      </div>
      <div class="input-field col s12">
        <input type="text" name="emergencia" id="emergencia">
        <label for="morada"> Contato em caso de emergência?</label>
      </div>
       <div class="input-field col s12">
        <input type="text" name="drogas" id="drogas">
        <label for="droga"> Usuário de drogas?</label>
      </div>
      <div class="input-field col s12">
        <input type="text" name="enfermidade" id="enfermidade">
        <label for="doenca"> Possui alguma enfermidade?</label>
      </div>
      
      <div align="center"><button type="submit" name="btn-cadastrar" class = "btn green accent-4"><i class="fas fa-check"></i> Cadastrar</button>
      <a href="adicionar.php" class = "btn yellow darken-3"><i class="fas fa-search"></i> Consulta de Cadastro</a></div>
    </form>
  </div>
</div>

</div>
    </form>
  </div>
</div>
</div>

<?php
//rodapé
include_once 'includes/footer.php';
?>
<?php
//conexao
include_once 'phpaction/db_connect.php';
//cabeçalho
include_once 'includes/header.php';
//select
if(isset($_GET['id'])):
  $id = mysqli_escape_string($connect, $_GET['id']);

  $sql = "SELECT * FROM clientes WHERE id = '$id'";
  $resultado = mysqli_query($connect, $sql);
  $dados = mysqli_fetch_array($resultado);
endif;


?>
<style>
body {
  background-image: url('img/fundo.jpg');
}
</style>

<div class="container">
<div class="card-panel grey lighten-4" >
<div class="row">
  <div class="col s12 m8 push-m2">
    <blockquote>
    <h3 class="ligth">
    Editar pessoa</h3>
  </blockquote>
    <form action="phpaction/update.php" method="POST">
      <input type="hidden" name="id" value ="<?php echo $dados['id'];?>">
      <div class="input-field col s12">
        <input type="text" name="nome" id="nome" value="<?php echo $dados['nome'];?>">
        <label for="nome"> Nome</label>
      </div>
      <div class="input-field col s6 s12">
        <input type="text" name="sobrenome" id="sobrenome" value="<?php echo $dados['sobrenome'];?>">
        <label for="sobrenome"> Sobrenome</label>
      </div>
      <div class="input-field col s12">
        <input type="number" name="documento" id="documento" value="<?php echo $dados['documento'];?>">
        <label for="documento"> Nº de Documento</label>
      </div>
      <div class="input-field col s12">
        <input type="text" class="datepicker" name="nascimento" value="<?php echo $dados['nascimento'];?>">
        <label for="nascimento"> Data de Nascimento</label>
      </div>
      <div class="input-field col s12">
        <input type="text" name="endereco" id="endereco" value="<?php echo $dados['endereco'];?>">
        <label for="morada"> Endereço de Morada?</label>
      </div>
      <div class="input-field col s12">
        <input type="text" name="familiar" id="familiar" value="<?php echo $dados['familiar'];?>">
        <label for="morada"> Familiar mais proximo?</label>
      </div>
      <div class="input-field col s12">
        <input type="text" name="emergencia" id="emergencia" value="<?php echo $dados['emergencia'];?>">
        <label for="morada"> Contato em caso de emergência?</label>
      </div>
       <div class="input-field col s12">
        <input type="text" name="drogas" id="drogas" value="<?php echo $dados['drogas'];?>">
        <label for="droga"> Usuário de drogas?</label>
      </div>
      <div class="input-field col s12">
        <input type="text" name="enfermidade" id="enfermidade" value="<?php echo $dados['enfermidade'];?>">
        <label for="doenca"> Possui alguma enfermidade?</label>
      </div>
      <div align="center"><button type="submit" name="btn-editar" class = "btn"><i class="fas fa-check"></i> Atualizar</button>
      <a href="index.php" class = "btn yellow darken-3"><i class="fas fa-search"></i> Consulta de Cadastro</a></div>

    </form>
  </div>
</div>


    </form>
  </div>
</div>

<?php
//rodapé
include_once 'includes/footer.php';
?>
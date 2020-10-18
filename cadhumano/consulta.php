<?php


//conexão
include_once 'phpaction/db_connect.php';
//cabeçalho
include_once 'includes/header.php';
//mensagem
include_once 'includes/mensagem.php';
?>

<style>
body {
  background-image: url('img/fundo.jpg');
}
</style>
<div class="row">
  <div class="col s12 m12">
    <blockquote>
    <h4 class="ligth">
    Lista de Cadastrados:</h4>
	</blockquote>
    <table class="highlight">
      <thead>
        <tr>
          <th>Nome:</th>
          <th>Sobrenome:</th>
          <th>Documento:</th>
          <th>Nascimento:</th>
          <th>Endereço de Moradia:</th>
          <th>Nome Familiar:</th>
          <th>Contato de Emergência:</th>
          <th>Drogas:</th>
          <th>Enfermidade:</th>
        </tr>
      </thead>

      <tbody >
        <?php
        $sql = "SELECT * FROM clientes";
        $resultado = mysqli_query($connect, $sql);
        if(mysqli_num_rows($resultado)> 0):

        while($dados = mysqli_fetch_array($resultado)):
        ?>
         <tr>
          <td><?php echo $dados['nome']; ?></td>
          <td><?php echo $dados['sobrenome']; ?></td>
          <td><?php echo $dados['documento']; ?></td>
          <td><?php echo $dados['nascimento']; ?></td>
          <td><?php echo $dados['endereco']; ?></td>
          <td><?php echo $dados['familiar']; ?></td>
          <td><?php echo $dados['emergencia']; ?></td>
          <td><?php echo $dados['drogas']; ?></td>
          <td><?php echo $dados['enfermidade']; ?></td>
          <td><a href="editar.php?id=<?php echo $dados['id']; ?>" class="btn-floating orange"><i class="material-icons">build</i></a></td>
          <td><a href="#modal<?php echo $dados['id']; ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>
          <!-- Modal Structure -->
  <div id="modal<?php echo $dados['id']; ?>" class="modal">
    <div class="modal-content">
      <h4>Opa!</h4>
      <p>Tem certeza que deseja excluir?</p>
    </div>
    <div class="modal-footer">
      
      <form action="phpaction/delete.php"method="POST">
        <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
        <button type="submit" name="btn-deletar" class="btn red"> Sim, quero </button>

        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
      </form>
    </div>
  </div>
        </tr>
      <?php 
    endwhile; 
    else: ?>
      <tr>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
      <?php
  endif;
    ?>
      </tbody>

    </table>
    <br>
    <a href="adicionar.php" class="btn-floating pulse btn-small waves-effect waves-light red"><i class="material-icons">add</i></a>
  </div>
  </div>
</div>

<?php
//rodapé
include_once 'includes/footer.php';
?>
<?php
//cabeçalho
include_once 'includes/header.php';
?>
<style>
body {
  background-image: url('img/fundo.jpg');
}
</style>

<script>
 document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.collapsible');
    var instances = M.Collapsible.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('.collapsible').collapsible();
  });
  </script>

<blockquote>
     <h3>Ajuda</h3>
    </blockquote>

<br>
<br>

<div class= "container">

<ul class="collapsible">
    <li>
      <div class="collapsible-header"><i class="material-icons">close</i>Deu erro ao cadastrar</div>
      <div class="collapsible-body"><span>Caso na hora do envio do formulário ocorra erro, verifique os dados informados e em caso de persistencia de erro consulte o administrador do sistema!</span></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">account_circle</i>Não sei como preencher</div>
      <div class="collapsible-body"><span>O sistema é bem intuitivo, você deve preencher os campos do formulário e realizar o envio.</span></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">assignment_late</i>Como pesquisar pessoas?</div>
      <div class="collapsible-body"><span>Clique na aba consulta de registros, e será exibida uma lista completa das pessoas cadastradas!</span></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">book</i>Outros erros comuns</div>
      <div class="collapsible-body"><span>Lorem ipsun Lorem ipsun Lorem ipsun Lorem ipsun Lorem ipsun Lorem ipsun </span></div>
    </li>
  </ul>
  </div>


<br>
<br>
<br>
<br>
<br>
<div class= "container">
<p> Development for Marco Lustosa // Github: https://github.com/marcolustosa</p>
</div>


<?php
//rodapé
include_once 'includes/footer.php';
?>
<?php
include "classCamiseta.php";
include "cabecalho.php";
?>
Objetos "Camiseta" Instaciados no sistema:

<?php
  foreach($_SESSION["camiseta"] as $c){
      echo "Cor:<span style='color:$c->cor'>$c->cor</span><br />
      Tamanho: $c->tamanho <br />
      Modelo: $c->modelo <br />
      
      <hr />";
  }
?>
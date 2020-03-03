<?php

include "classCamiseta.php";
include "cabecalho.php";
$c = new Camiseta();

$c->cor = $_POST["cor"];
$c->tamanho = $_POST["tamanho"];
$c->modelo = $_POST["modelo"];




$_SESSION["camiseta"][] = $c;



?>
<h3>Camiseta Cirada com Sucesso.</h3>

</body>
</html>
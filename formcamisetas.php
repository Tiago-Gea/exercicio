<?php
include "cabecalho.php";
?>
   <h1>Criar Objeto camiseta</h1>
   <form action="instanciar_camiseta.php" method="post">
       Definir cor do camiseta:
       <input type="color" name="cor" />
       <br />

       <input type="text" name="tamanho" placeholder="Tamanho..." />
       <br />

       <input type="text" name="modelo" placeholder="Modelo..." />
       <br />

       <input type="submit" value="Criar Camiseta" />
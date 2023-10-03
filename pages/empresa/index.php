<?php
  require_once 'empresa_controller.php';

  //cria um controlador
  $controlador = new EmpresaController(); 

  //obtem a lista de empresas do banco de dados.
  $lista = $controlador->listar();

?>
<nav class="navbar sticky-top bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Lista de Empresas</a>
  </div>
</nav>

<div class="container-fluid">
    <table class="table"> 
          <thead> 
               <tr>
                 <th scope="col">Nome da Empresa</th>
                 <th scope="col">Telefone</th>
               </tr> 
          </thead>  
          <tbody>
            <?php
              foreach($lista as $empresa) {
            ?>
             <tr>
                <td><a href="#"><?=$empresa->getNome()?></a></td>
                <td ><?=$empresa->getTelefone()?></td>
             </tr>

            <?php
              }
            ?>
          </tbody>  
    </table>    


    <div id="div-add">
       <a href="empresa/novo"><i class="fa fa-plus" aria-hidden="true"></i></a>
    </div>  
</div>    
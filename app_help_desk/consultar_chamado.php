<?php
require_once "validador_acesso.php"
?>

<?php

// abrir o arquivo.txt
$arquivo = fopen('../../app_help_desk/arquivo.txt', 'r');
//chamados
$chamados = array();
while(!feof($arquivo)){ //feof testa até o fim do arquivo// a primeira linha daria falso pq não é o final do arquivo por isso o "!"
  $registro = fgets($arquivo); //fgets recupera os dados da linha ate a quebra de linha
  $chamados[] = $registro; 
}; 

//
  fclose($arquivo);
//
?>


<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-consultar-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

  <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand d-flex " href="#">
        <img src="Logo Central Cred.png" width="55" height="50" class="d-inline-block align-top" alt="" >
        <p style="padding-top: .5em;">Help Desk Central-Cred</p>
      </a>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class='nav-link' href="logoff.php">SAIR</a>
        </li>
      </ul>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Consulta de chamado
            </div>
            
            <div class="card-body">
              
              
                  <?php
                  foreach ($chamados as $chamado){ ?>

                  <?php
    	                $chamado_dados = explode('#', $chamado);


                      //teste de adm ou usuario
                      if($_SESSION["perfil_id"] == 2){
                        //só vamos exibir o chamado, se ele foi criado pelo cliente que solicitou
                        if($_SESSION['id'] != $chamado_dados[0]){
                          continue;
                        }
                      }

                      if (count($chamado_dados) < 3){
                        continue;
                      }
                  ?>

                  <div class="card mb-3 bg-light">
                      <div class="card-body">
                        <h5 class="card-title"><?=$chamado_dados[1]?></h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?=$chamado_dados[2]?></h6>
                        <p class="card-text"><?=$chamado_dados[3]?></p>

                      </div>
                  </div>
                    <?php } ?>
              <div class="row mt-5">
                <div class="col-6">
                    <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
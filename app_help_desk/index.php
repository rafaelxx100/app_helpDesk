<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-login {
        padding: 30px 0 0 0;
        width: 350px;
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
      
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-login">
          <div class="card">
            <div class="card-header">
              Login
            </div>
            <div class="card-body">
              <form action="valida_login.php" method="post">
                <div class="form-group">
                  <input name="email" type="email" class="form-control" placeholder="E-mail">
                </div>
                <div class="form-group">
                  <input name="senha" type="password" class="form-control" placeholder="Senha">
                </div>
                <? 
                    if(isset($_GET['login']) && $_GET['login'] == 'erro'){ //metodo isset verifica se um indice esta setado, os valores são boolean
                  ?> 
                  <div class="text-danger">
                    Usuario ou senha invalidos 
                  </div>
                  <? } //aqui é o fechamento do if da parte da outra tag php, isso fica mais facil a leitura do codigo e principalmente, a div esta dentro do if estando dentro do html,
                  // ou seja essa div só vai existir se a condiçao for atendida, legal né?>
                  <? 
                    if(isset($_GET['login']) && $_GET['login'] == 'erro2'){ 
                  ?> 
                  <div class="text-danger">
                    Faça login antes de acessar as páginas
                  </div>
                  <? }?>
                <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
              </form>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
  <form action="login.php" method="post">
    <div class="main-login">
        <div class= "left-login">
            <h1>Faça o seu login<br>E entre para o time Academic Code</h1>
            <img src="../img/Innovation.gif" class ="left-login-image" alt="">
        </div>
        <div class="right-login">
            <div class="card-login">
                <h1>LOGIN</h1>
                  <div class="textfield">
                    <label for="usuario">Usuário</label>
                    <input id="user" type="text" id="usuario" name="usuario" required="required" placeholder="Usuário">
                  </div>
                  <div class="textfield">
                    <label for="senha">Senha</label>
                    <input id="senha" type="password" id="senha" name="senha" required="required" placeholder="Senha">
                  </div>
                  <button class="btn-login" type="submit">Enviar</button>
                  <div class = "textfold">
                    <a href="cadastro.php">Ainda não tem login?</a>
                  </div>
                </div>
              </div>
            </div>
          </form>
   
</body>
</html>
     
      
  
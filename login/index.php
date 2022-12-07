<?php
    require_once('classes/moderador.php');
    require_once('header.php');

    if($_SERVER["REQUEST_METHOD"] == "POST"){ // se o método chamado for tipo Post
        $usuario = new Usuario();
        $result = $usuario->getUsuario($_POST['username']); 
        $row = $result->fetch_assoc(); 
        if($_POST['username'] == $row['usuario'] and $_POST['password'] == $row['senha']){ // se o usuario e senha for valido
            session_start(); // inicializa session 
            $_SESSION['loggedin'] = TRUE; // seta no session loggedin verdadeiro
            $_SESSION["usuario"] = $row["nome"];  // seta no session usuario Witer
            header("location: welcome.php"); // redireciona para inicio
            } else {
                $_SESSION['loggedin'] = FALSE; // se não seta no session loggedin falso
        }
    }

?>
 </head>
<body class="text-center">
    <form class="form-signin" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <img class="mb-4" src="img/logo_sala_Professores.png" alt="Logo" width="60%" height="60%">
        <h1 class="h3 mb-3 font-weight-normal" style="color: #988074;">Efetue seu Login:</h1>
                
                <div class="form-group">
                <label>Usuário</label>
                <input type="text" name="username" class="form-control" value="">
                <span class="help-block"></span>
            </div>    
            <div class="form-group">
                <label>Senha</label>
                <input type="password" name="password" class="form-control" value="">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Acessar">
            </div>        
    </form>
</body>
</html>
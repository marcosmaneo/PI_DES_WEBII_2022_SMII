<?php
    require_once('header.php');
    session_start();

    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("location: index.php");
        exit;
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if( $_POST['user'] != ""  && $_POST['name'] != ""  &&   $_POST['email'] != "" && $_POST['password'] != "")  { 
            
            require_once('classes/professor.php');
            $professor = new Professor();


            //$professor->usuario = $_POST['user'];
            $professor->alterarProfessor($_POST['user'], $_POST['name'], $_POST['email'], $_POST['password']);
            // $professor->nome = $_POST['name'];
           // $professor->email = $_POST['email'];
           // $professor->senha = $_POST['password']; 

            $professor->Cadastrar();

            header("location: listar.php");
        }
    }
      
?>
<body class="text-center">

            

    <form class="form-signin" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            
            <div class="btn-right ">
                <a href="listar.php" class="btn btn-warning">Listar Professores</a>
                <a href="logout.php" class="btn btn-danger">Sair da conta</a>
            </div>

        <img class="mb-4" src="img/logo_sala_Professores.png" alt="Logo" width="60%" height="60%">
        <h1 class="h3 mb-3 font-weight-normal" style="color: #988074;">Cadastro de novo professor</h1>
                
                <div class="form-group">
                <label>Usuário</label>
                <input type="text" name="user" class="form-control" value="">
                <span class="help-block"></span>
            </div> 
            <div class="form-group">
                <label>Nome</label>
                <input type="text" name="name" class="form-control" value="">
                <span class="help-block"></span>
            </div>    
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control" value="">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label>Senha</label>
                <input type="password" name="password" class="form-control" value="">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Cadastrar">
            </div>
            

                       
    </form>
</body>




</html>